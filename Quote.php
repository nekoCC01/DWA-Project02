<?php
/**
 * Created by PhpStorm.
 * User: danielkasai1
 * Date: 26.09.17
 * Time: 17:56
 */

namespace QuoteApp;

class Quote
{
    #Properties
    private $quotes;

    #Methods
    public function __construct($jsonPath)
    {
        //get all quotes from json-file
        $quotesJson   = file_get_contents($jsonPath);
        $quotes_array = json_decode($quotesJson, true);
        $this->quotes = $quotes_array['quotes'];

    }

    public function getAll()
    {
        return $this->quotes;
    }

    public function getByLanguage($language)
    {

        $filteredQuotes = [];

        foreach ($this->quotes as $quote) {
            if ($quote['language'] == $language) {
                $filteredQuotes[] = $quote;
            }
        }

        return $filteredQuotes;
    }


}

