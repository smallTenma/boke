<?php
if(version_compare(PHP_VERSION,"5.3.0", "<"))  die("require PHP_VERSION > 5.3.0 !");
define("APP_DEBUG", true);
define("APP_PATH", "./App/");
require 'ThinkPHP/ThinkPHP.php';
