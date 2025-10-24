<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckPassword implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return password_verify($value, Auth::user()->password);
    }

    public function message()
    {
        return 'Het huidige wachtwoord komt niet overeen';
    }
}
