<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$handler = new RotatingFileHandler("../logs/logs.log", 10, Logger::WARNING);
$handler->setFilenameFormat('{filename}: {date}', 'Y-m-d');
$logger->pushHandler($handler);

