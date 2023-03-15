<?php


declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require '../app/Transaction.php';
//new comment
// /var/www/html/learnphptherightway-project/ 
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* require(APP_PATH . 'fileViewer.php');
$csvArray = csvsToArray(FILES_PATH);
$totals = getTotal($csvArray); */

$trans = new Transaction();
$trans->setStatus('pending');
echo '<pre>';
var_dump($trans);
echo '<pre>';