<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class cpf implements Rule
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
        $numeros = ["0", "1", "2", "3", "4", "5","6", "7","8","9"];
        $cpf = str_split($value);
            if(count($cpf) == 14){
                for ($i=0; $i <= 2; $i++) { 
                    if(!in_array($cpf[$i], $numeros)){
                        return false;
                    }
                }
                if(!$cpf[3] == "."){
                    return false;
                }
                for ($i=4; $i <= 6; $i++) { 
                    if(!in_array($cpf[$i], $numeros)){
                        return false;
                    }
                }
                if(!$cpf[7] == "."){
                    return false;
                }
                for ($i=8; $i <= 10; $i++) { 
                    if(!in_array($cpf[$i], $numeros)){
                        return false;
                    }
                }
                if(!$cpf[11] == "-"){
                    return false;
                }
                for ($i=12; $i <= 13; $i++) { 
                    if(!in_array($cpf[$i], $numeros)){
                        return false;
                    }
                }

                if(($cpf[0] * 10 + $cpf[1] * 9 + $cpf[2] * 8 + $cpf[4] * 7 + $cpf[5] * 6 + $cpf[6] * 5 + $cpf[8] * 4 + $cpf[9] * 3 + $cpf[10] * 2) * 10 % 11 != $cpf[12]){
                    return false;
                }

                if(($cpf[0] * 11 + $cpf[1] * 10 + $cpf[2] * 9 + $cpf[4] * 8 + $cpf[5] * 7 + $cpf[6] * 6 + $cpf[8] * 5 + $cpf[9] * 4 + $cpf[10] * 3 + $cpf[12] * 2) * 10 % 11 != $cpf[13]){
                    return false;
                }

            return true;
            }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Formato do cpf incorreto';
    }
}
