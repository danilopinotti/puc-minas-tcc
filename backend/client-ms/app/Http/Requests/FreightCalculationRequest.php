<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FreightCalculationRequest extends FormRequest
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
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'weightG' => 'required|numeric|min:0.01',
            'heightCm' => 'required|numeric|min:0.01',
            'widthCm' => 'required|numeric|min:0.01',
            'lengthCm' => 'required|numeric|min:0.01',
        ];
    }
}
