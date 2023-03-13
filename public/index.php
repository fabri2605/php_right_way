<?php

require __DIR__ . '/../vendor/autoload.php';

// declare(strict_types=1);
/* declare(strict_types=1);
// /var/www/html/learnphptherightway-project/ 
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);
require(APP_PATH . 'fileViewer.php');
$csvArray = csvsToArray(FILES_PATH);
$totals = getTotal($csvArray); */

$trans = new Transaction('PAID');

$id = new Ramsey\Uuid\UuidFactory();

echo $trans->STATUS_PAID;

/* include_once('../views/transactions.php'); */