<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompresorUpdateRequest extends FormRequest
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
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            
            'level'=>'Nivel',
            'temperature'=>'Temperatura'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'level'=>'required|numeric',
            'temperature'=>'required|numeric'
        ];
    }
}
