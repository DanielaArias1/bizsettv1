<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInversionista extends FormRequest
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

            'propuesta'=>'Required',
            // 'emprendimiento_id'=>'Required',
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

            'propuesta.required'=>'Debe digitar una propuesta',
            // 'emprendimiento_id.required'=>'Debe ingresar a que emprendimiento desea hacer la propuesta',
            
        ];
    }
}
