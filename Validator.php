<?php

class Validator
{
    public function sanitizeString($data)
    {
        return trim(filter_input(INPUT_POST, $data ,FILTER_SANITIZE_STRING));
    }

    public function sanitizeInt($data)
    {
        return trim(filter_input(INPUT_POST, $data ,FILTER_SANITIZE_NUMBER_INT));
    }

    public function sanitizeFloat($data)
    {
        return trim(filter_input(INPUT_POST, $data ,FILTER_SANITIZE_NUMBER_FLOAT));
    }

    public function sanitizeEmail($data)
    {
        return trim(filter_input(INPUT_POST, $data ,FILTER_SANITIZE_EMAIL));        
    }

    public function sanitizeUrl($data)
    {
        return trim(filter_input(INPUT_POST, $data ,FILTER_SANITIZE_URL));        
    }

}
