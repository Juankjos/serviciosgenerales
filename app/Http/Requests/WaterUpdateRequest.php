<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaterUpdateRequest extends FormRequest
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
            'initial_read' => 'Lectura inicial',
            'cloration' => 'Cloración    ',
            'final_read' => 'Lectura Final',
            'consumption' => 'Consumo Metros Cubicos',
            'consumption_t' => 'Consumo Total',
            'observations' => 'Observaciones'
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
            'initial_read' => 'required|max:255',
            'cloration' => 'required|numeric',
            'final_read' => 'min:0|required|numeric',
            'consumption' => 'min:0|required|numeric',
            'consumption_t' => 'min:0|required|numeric',
            'observations' => 'required'
        ];
    }
}
