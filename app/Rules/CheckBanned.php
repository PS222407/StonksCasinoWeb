<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckBanned implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
       return Auth::user()->banned != true;
    }

    public function message()
    {
        return 'U kunt geen tokens meer toevoegen uw account is gebanned neem contact op met onze klantenservice';
    }
}
