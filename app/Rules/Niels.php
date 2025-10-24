<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class Niels implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
       return Auth::user()->username != "BreakdancerNiels";
    }

    public function message()
    {
        return 'Sorry BreakdancerNiels u heeft niet de bevoegdheid om uw gebruikersnaam aan te passen';
    }
}
