<?php namespace App\Validation;

class AlphaSpaceValidator {

    public function validate($attribute, $value, $parameters)
    {
        return preg_match('/^[\pL\pM\pN\pZs]+$/u', $value);
    }

}