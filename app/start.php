<?php

require ROOT . '/app/dbloader.php';

/*
|--------------------------------------------------------------------------
| Create Slim Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Slim application instance
| which serves as the "glue" for all the components of RedSlim.
|
*/

// Instantiate application
$app = new \Slim\Slim(require_once ROOT . '/app/config/app.php');
$app->setName('Hashgram');


// For native PHP session
session_cache_limiter(false);
session_start();

// For encrypted cookie session 
/*
$app->add(new \Slim\Middleware\SessionCookie(array(
            'expires' => '20 minutes',
            'path' => '/',
            'domain' => null,
            'secure' => false,
            'httponly' => false,
            'name' => 'app_session_name',
            'secret' => md5('appsecretkey'),
            'cipher' => MCRYPT_RIJNDAEL_256,
            'cipher_mode' => MCRYPT_MODE_CBC
        )));
*/


/*
 * SET some globally available view data
 */
$resourceUri = $_SERVER['REQUEST_URI'];
$rootUri     = $app->request()->getRootUri();
$assetUri    = $rootUri;
$app->view()->appendData(
    array(
        'app' => $app,
        'rootUri' => $rootUri,
        'assetUri' => $assetUri,
        'resourceUri' => $resourceUri
    )
);


// Disable fluid mode in production environment
$app->configureMode(SLIM_MODE_PRO, function () use ($app) {
    // note, transactions will be auto-committed in fluid mode
    R::freeze(true);  
});



/*
|--------------------------------------------------------------------------
| INCLUDING FRAMEWORK AND CONTROLLERS CLASSES
|--------------------------------------------------------------------------
|
| The application needs Framework Classes (e.g. RouteManager)
| and Controllers to works
|
*/
//INCLUDE FRAMEWORK CLASSES RECURSIVELY
$directory   = new RecursiveDirectoryIterator(ROOT . '/app/framework/');
$recIterator = new RecursiveIteratorIterator($directory);
$regex       = new RegexIterator($recIterator, '/\/*.php$/i');
foreach($regex as $item) {
    include $item->getPathname();
}


/*
|--------------------------------------------------------------------------
| Configure Twig
|--------------------------------------------------------------------------
|
| The application uses Twig as its template engine. This script configures 
| the template paths and adds some extensions.
|
*/

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => ROOT . '/app/storage/cache/twig',
    'auto_reload' => true,
    //'strict_variables' => true
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;