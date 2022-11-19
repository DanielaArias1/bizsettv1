<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleo extends FormRequest
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

            'evidencia'=>'Required',
            'mensaje_trabajo'=>'Required',
        ];
    }

    public function attributes()
    {
        return [
            
        ];
    }

    public function messages()
    {
        return[

            'evidencia.required'=>'Debe cargar una hoja de vida',
            'mensaje_trabajo.required'=>'Debe ingresar un mensaje',
            
        ];
    }
}
