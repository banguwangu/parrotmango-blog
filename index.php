<?php

#lets require the config file from our root folder
require 'config.php';

#the file class generats directory path and help us with loading the required files
require APPPATH.s.'System'.s.'core'.s.'File.php';
#bootstrap file is important in generating the request and processing all request
require APPPATH.s.'System'.s.'core'.s.'Bootstrap.php';

#this is required to handle our namespacing
use System\core\File;
use System\core\Bootstrap;



$file = new File(APPPATH);
#now lets get the current file instance
$app = Bootstrap::init_instance($file);

#finally we initialize the application
$app->init();
