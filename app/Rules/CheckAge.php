<?php

namespace App\Rules;

use DateTime;
use Hamcrest\Core\HasToString;
use Illuminate\Contracts\Validation\Rule;

class CheckAge implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return $value <= today()->modify("-18 years")->format("Y-m-d");
    }

    public function message()
    {
        return 'U moet minimaal 18 jaar zijn om een account te registreren';
    }
}
