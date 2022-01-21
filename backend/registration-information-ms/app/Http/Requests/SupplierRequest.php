<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'company_name' => 'required|string|max:255|min:3',
            'trading_name' => 'nullable|sometimes|string|max:255|min:3',
            'cnpj' => 'required|string|size:18',
            'ie' => 'sometimes|nullable|min:5',
            'contact_phone' => 'sometimes|nullable|min:8|max:18',
            'contact_email' => 'sometimes|nullable|email',
        ];
    }
}
