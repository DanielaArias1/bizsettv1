<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuzon extends FormRequest
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

            'mensaje'=>'Required',
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
            'mensaje.required'=>'Debe ingresar un mensaje',
            
        ];
    }
}
