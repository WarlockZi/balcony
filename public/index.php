<?php

use core\Router;
use Dotenv\Dotenv;

session_start();

include __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__,1));
$dotenv->load();

include dirname(__DIR__) . '/core/constants.php';
include __DIR__ . '/bootstrap.php';



$router = new Router();