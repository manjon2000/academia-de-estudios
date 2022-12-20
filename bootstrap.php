<?php

/**
 * Import dotenv
 */
use Symfony\Component\Dotenv\Dotenv;

/**
 * Display errors
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

/**
 * Include autoload.php
 */

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Include dotenv
 */

(new Dotenv())->load(path: __DIR__ . '/.env');
