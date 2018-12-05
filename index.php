<?php


use System\core\File;
use System\core\Appication;
/*
Lets get the boostrapping class from the application system folder
*/
$file = File(__dir__);
$app = Application($file);
$app->getIstance();
