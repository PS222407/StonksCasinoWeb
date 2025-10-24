<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Shop implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return $value == 'a';
    }

    public function message()
    {
        return 'The validation error message.';
    }
}
