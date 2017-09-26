<?php
/**
 * Created by PhpStorm.
 * User: danielkasai1
 * Date: 19.09.17
 * Time: 16:38
 */

require('helpers.php');
require('Form.php');
require('Quote.php');

use DWA\Form;
use QuoteApp\Quote;

$form  = new Form($_GET);
$quote = new Quote('quotes.json');


//classes for hiding the form
$class_form = '';

if ($form->isSubmitted()) {

    $errors = $form->validate([
            'username' => 'required|alpha'
    ]);

    if (empty($errors)) {
        $class_form = 'hide';

        $filtered_quotes = $quote->getByLanguage($_GET['language']);

        //get random quote out of the left quotes
        shuffle($filtered_quotes);
        $random_quote = array_pop($filtered_quotes);
    }

}







