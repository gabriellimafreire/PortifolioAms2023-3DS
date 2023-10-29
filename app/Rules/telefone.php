<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class telefone implements Rule
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
        $numeros = ["0", "1", "2","3", "4", "5", "6", "7", "8", "9"];
        $telefone = explode(" ", $value);

        // +555 (111) 98765-0987

        if(str_split($value)[0] == "+" && (str_split($value)[2] == " " || str_split($value)[3] == " " || str_split($value)[4] == " ") && (str_split($value)[6] == " " || str_split($value)[7] == " " || str_split($value)[8] == " " || str_split($value)[9] == " " || str_split($value)[10] == " ") && (str_split($value)[12] == "-" || str_split($value)[13] == "-" || str_split($value)[14] == "-" || str_split($value)[15] == "-" || str_split($value)[16] == "-") ){
           //passa
        }else{
            return false;
        }

        $parte1 = str_split($telefone[0]);
        $parte2 = str_split($telefone[1]);
        $parte3 = str_split(explode("-", $telefone[2])[0]);
        $parte4 = str_split(explode("-", $telefone[2])[1]);

        
        
        if(count($parte1) > 4 || count($parte1) < 2){
            return false;
        }
        
        if($parte1[0] != "+"){
            return false;
        }
        
        for ($i=1; $i < count($parte1); $i++) { 
            if(!in_array($parte1[$i], $numeros)){
                return false;
            }
        }
        
        if(!($parte2[0] == "(" && $parte2[count($parte2) - 1] == ")")){
            return false;
        }

        for ($i=1; $i < count($parte2) - 1; $i++) { 
            if(!in_array($parte2[$i], $numeros)){
                return false;
            }
        }

        if(count($parte3) < 4 || count($parte3) > 5 ){
            return false;
        }

        for ($i=0; $i < count($parte3); $i++) { 
            if(!in_array($parte3[$i], $numeros)){
                return false;
            }
        }

        if(count($parte4) != 4){
            return false;
        }

        for ($i=0; $i < count($parte4); $i++) { 
            if(!in_array($parte4[$i], $numeros)){
                return false;
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
        return 'Formato de telefone incorreto';
    }
}
