<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class cnpj implements Rule
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
        $cnpj = str_split($value);

        if(!$cnpj[2] == "."  && !$cnpj[6] == "." && !$cnpj[10] == "/" && !$cnpj[15] == "-"){
            return false;
        }

        for ($i=0; $i < 2; $i++) { 
           if(!in_array($cnpj[$i], $numeros)){
            return false;
           }
        }

        for ($i=3; $i < 6; $i++) { 
            if(!in_array($cnpj[$i], $numeros)){
             return false;
            }
         }

         for ($i=7; $i < 10; $i++) { 
            if(!in_array($cnpj[$i], $numeros)){
             return false;
            }
         }

         for ($i=11; $i < 15; $i++) { 
            if(!in_array($cnpj[$i], $numeros)){
             return false;
            }
         }

         for ($i=16; $i <= 17; $i++) { 
            if(!in_array($cnpj[$i], $numeros)){
             return false;
            }
         }

         // primeiro digito

         $cnpjValidar = ($cnpj[0] * 5 + $cnpj[1] * 4 + $cnpj[3] * 3 + $cnpj[4] * 2 + $cnpj[5] * 9 + $cnpj[7] * 8 + $cnpj[8] * 7 + $cnpj[9] * 6 + $cnpj[11] * 5 + $cnpj[12] * 4 + $cnpj[13] * 3 + $cnpj[14] * 2);

         $cnpjValidacao = (int) $cnpjValidar % 11;

         if(($cnpjValidacao ==0 || $cnpjValidacao == 1) && $cnpj[16] == 0){
            //passa
         }else{
            for ($i=2; $i <= 10; $i++) { 
                if($cnpjValidacao == $i &&  11 - $cnpjValidacao == $cnpj[16]){
                    break;
                    // passa
                }
                if($i == 10){
                    return false;
                }
            }
        }
         
         // segundo digito

         $cnpjValidar = ($cnpj[0] * 6 + $cnpj[1] * 5 + $cnpj[3] * 4 + $cnpj[4] * 3 + $cnpj[5] * 2 + $cnpj[7] * 9 + $cnpj[8] * 8 + $cnpj[9] * 7 + $cnpj[11] * 6 + $cnpj[12] * 5 + $cnpj[13] * 4 + $cnpj[14] * 3 + $cnpj[16] * 2);

         $cnpjValidacao = (int) $cnpjValidar % 11;

         if(($cnpjValidacao ==0 || $cnpjValidacao == 1) && $cnpj[16] == 0){
            // passa
         }else{

            for ($i=2; $i <= 10; $i++) { 
                if($cnpjValidacao == $i &&  11 - $cnpjValidacao == $cnpj[17]){
                    break;
                    // passa
                }
                if($i == 10){
                    return false;
                }
            }

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
        return 'CNPJ invalido';
    }
}
