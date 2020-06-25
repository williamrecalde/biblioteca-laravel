<?php

namespace App\Http\Requests;

use App\Rules\ValidarCAmpoUrlRule;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //se pasa eln unique el nombre de la tabla el nom bre del campo 
            //y el id para verificar que se unico
            'nombre'=>'required|max:50|unique:menu,nombre,'. $this->route('id'),
            'url'=> ['required','max:100',new ValidarCAmpoUrlRule]  ,//'required|max:100',
            'icono'=>'nullable|max:50'
        ];
    }

    /*public function messages(){
        return[
            'nombre.required'=>'El campo nombre es obligatorio (max. 50 car.)',
            'url.required'=>'El campo url es obligatorio (max. 50 car.)'
        ];
    }*/
}
