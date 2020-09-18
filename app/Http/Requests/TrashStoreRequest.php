<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrashStoreRequest extends FormRequest
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
            'date' => 'Fecha',
            'area'=>'Area',
            'quantity'=>'Cantidad'
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
            'date' => 'required',
            'area'=>'required',
            'quantity'=>'required|numeric'
        ];
    }
}
