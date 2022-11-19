<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmprendimiento extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'nombre_emprendimiento'=>'Required|max:30',
            'clasificacion'=>'Required',
            'descripcion'=>'Required',

        ];
    }

    public function attributes()
    {
        return [
            'nombre_emprendimiento'=>'nombre del emprendimiento',
        ];
    }

    public function messages()
    {
        return[
            'clasificacion.required'=>'Debe ingresar una clasificación',
            'descripcion.required'=>'Debe ingresar una descripción',

        ];
    }
}
