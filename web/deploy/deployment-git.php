<?php

include_once "../../app/framework/deploy/GitDeploy.php";

$gitDeploy = new \App\Framework\Deploy\GitDeploy();

// $gitDeploy->beforeDeploy = function() use ($gitDeploy) {
//   // update any db changes
//   // shell_exec('curl http://www.foobar.com/wp-admin/upgrade.php?step=upgrade_db');
//   // $gitDeploy->log('Updating database... ');
// };

$gitDeploy->execute();
echo "teste deploy";