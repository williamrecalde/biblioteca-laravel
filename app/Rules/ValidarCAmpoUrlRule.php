<?php

namespace App\Rules;

use App\Models\Admin\Menu;
use Illuminate\Contracts\Validation\Rule;

class ValidarCAmpoUrlRule implements Rule
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
        //aca se recibe el nombre del campo y el valor pasado por el formulario 
        if($value != '#'){
            //si elv alor pasado es diferente de numeral verificar que no exista en la base de datos
            $menu = Menu::where($attribute,$value)->get();
            //si no hay elementos enla coleccion deuvelve verdadero
            //si hay elementos devuelve false la coleccion si tiene elementos  o URL existe en la bd
            return $menu->isEmpty();
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
        return 'La URL ya esta asignada.';
    }
}
