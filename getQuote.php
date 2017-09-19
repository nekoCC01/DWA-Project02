<?php
/**
 * Created by PhpStorm.
 * User: danielkasai1
 * Date: 19.09.17
 * Time: 16:38
 */

$newURL = 'showQuote.php';

require('helpers.php');

//get all quotes from json-file
$quotesJson = file_get_contents('quotes.json');
$quotes = json_decode($quotesJson, true);

$hasInput = false;
//class for hiding the form
$class_form = '';
$class_feedback_message = 'hide';

if (!empty($_GET)) {

    if(empty($_GET['username'])){
        $class_feedback_message = '';
    } else {
        $hasInput = true;
        $class_form = 'hide';

        //Filter quotes by language
        foreach ($quotes["quotes"] as $index => $quote){
            if ($quote['language'] != $_GET['language']) {
                unset($quotes['quotes'][$index]);
            }
        }
        //get random quote out of the left quotes
        shuffle($quotes["quotes"]);
        $random_quote = array_pop($quotes["quotes"]);
    }
}


