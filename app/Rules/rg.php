<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class rg implements Rule
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
        $numeros = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

        $rg = str_split($value);

        if(!$rg[2] == "." && !$rg[6] == "." && !$rg[10] == "-"){
            return false;
        }

        for ($i=0; $i < 2; $i++) { 
            if(!in_array($rg[$i], $numeros)){
                return false;
            }
        }

        for ($i=3; $i < 6; $i++) { 
            if(!in_array($rg[$i], $numeros)){
                return false;
            }
        }

        for ($i=7; $i < 10; $i++) { 
            if(!in_array($rg[$i], $numeros)){
                return false;
            }
        }

        for ($i=11; $i <= 11; $i++) { 
            if(!in_array($rg[$i], $numeros)){
                return false;
            }
        }
        

        if(($rg[0] * 9 + $rg[1] * 8 + $rg[3] * 7 + $rg[4] * 6 + $rg[5] * 5 + $rg[7] * 4 + $rg[8] * 3 + $rg[9] * 2) % 11 == $rg[11]){
            return true;
        }

        return  false;


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'RG Invalido';
    }
}
