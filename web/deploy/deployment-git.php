<?php
date_default_timezone_set('America/Bahia');
class Deploy {
    /**
     * A callback function to call after the deploy has finished.
     *
     * @var callback
     */
    public $beforeDeploy;

    /**
     * The name of the file that will be used for logging deployments.
     * Set to FALSE to disable logging.
     *
     * @var string
     */
    private $logFile = 'deployments.log';

    /**
     * The timestamp format used for logging.
     *
     * @link http://www.php.net/manual/en/function.date.php
     * @var string
     */
    private $dateFormat = 'Y-m-d H:i:s';


    /**
     * The directory where your website and git repository are located, can be
     * a relative or absolute path
     *
     * @var string
     */
    private $directory;

    /**
     * @param string $directory Directory where your website is located
     */
    public function __construct($directory)
    {
        // Determine the directory path
        $this->directory = realpath($directory).DIRECTORY_SEPARATOR;
        $this->log('Starting deployment...');
    }

    /**
     * @return string
     */
    public function getLogFile()
    {
        return $this->logFile;
    }

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * Writes a message to the log file
     *
     * @param string $message The message to write
     * @param string $type    The type of log message (e.g. INFO, DEBUG, ERROR, etc.)
     */
    public function log($message, $type = 'INFO')
    {
        if ($this->logFile){
            // Set the name of the log file
            $filename = $this->logFile;

            if (!file_exists($filename)){
                // Create the log file
                file_put_contents($filename, '');

                // Allow anyone to write to log files
                chmod($filename, 0666);
            }

            // Write the message into the log file
            // Format: time --- type: message
            file_put_contents($filename, date($this->dateFormat).' --- '.$type.': '.$message.PHP_EOL, FILE_APPEND);
        }
    }

    /**
     * Executes the necessary commands to deploy the website.
     */
    public function execute()
    {
        try{
            // Make sure we're in the right directory
            $output = shell_exec('cd '.$this->directory);
            $this->log('Changing working directory... ');

            // Discard any changes to tracked files since our last deploy
            $output = shell_exec('git reset --hard HEAD');
            $this->log('Reseting repository... '.$output);

            // Update the local repository
            $output = shell_exec('git pull origin master');
            $this->log('Pulling in changes... '.$output);

            // Secure the .git directory
            $output = shell_exec('chmod -R og-rx .git');
            $this->log('Securing .git directory... '.$output);

            if (is_callable($this->beforeDeploy)){
                call_user_func($this->beforeDeploy);
            }

            $this->log('Deployment successful.');
        }catch (Exception $e){
            $this->log($e, 'ERROR');
        }
    }

}

// This is just an example
$deploy = new Deploy('');

// $deploy->beforeDeploy = function() use ($deploy) {
//   // hit the wp-admin page to update any db changes
//   // shell_exec('curl http://www.foobar.com/wp-admin/upgrade.php?step=upgrade_db');
//   // $deploy->log('Updating wordpress database... ');
// };

$deploy->execute();