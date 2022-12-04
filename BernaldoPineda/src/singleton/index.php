<?php

require_once '../vendor/autoload.php';

use singleton\{DBEngine};

$dbengine = DBEngine::getInstance();
$dbengine2 = DBEngine::getInstance();
var_dump($dbengine === $dbengine2);
