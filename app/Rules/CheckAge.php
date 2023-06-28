<?php

namespace App\Rules;

use DateTime;
use Hamcrest\Core\HasToString;
use Illuminate\Contracts\Validation\Rule;

class CheckAge implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value <= today()->modify("-18 years")->format("Y-m-d");
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'U moet minimaal 18 jaar zijn om een account te registreren';
    }
}
