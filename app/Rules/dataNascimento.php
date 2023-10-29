<?php

namespace App\Rules;

use DateTime;
use Illuminate\Contracts\Validation\Rule;

class dataNascimento implements Rule
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
       $dataNascimento = new DateTime($value);
       $now = new DateTime(date('d-m-Y'));   

       if($dataNascimento->diff($now)->y < 18 && $dataNascimento->diff($now)->y <= 115){
            return false;
       }

       return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'É preciso ter mais de 18 anos para utilizar este site';
    }
}
