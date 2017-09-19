<?php
/**
 * Created by PhpStorm.
 * User: danielkasai1
 * Date: 19.09.17
 * Time: 16:38
 */

$newURL = 'showQuote.php';

require('helpers.php');

$quotesJson = file_get_contents('quotes.json');
$quotes = json_decode($quotesJson, true);

#dump($quotes);

if (isset($_GET['username'])) {
    dump($_GET);
    $class_hide = 'hide';
} else {
    $keyword = '';
}


