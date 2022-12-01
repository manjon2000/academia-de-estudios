<?php


use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once __DIR__ . '/vendor/autoload.php';

$logger = new Logger('logs');

$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/logger.log', Level::Warning));