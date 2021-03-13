<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'product_name' => 'required|alpha|bail',
            'quantity' => 'required|numeric|bail',
            'unit_price' => 'required|numeric|bail',
            'total_price' => 'required|numeric|bail',
            'status' => 'required',
            'vendor_name' => 'required|alpha|bail',
            'vendor_address' => 'required|alpha|bail',
            'vendor_phone' => 'required|min:11|max:15|bail',
            'payment_type' => 'required',
            'payment_amount' => 'required|numeric|bail',
            'due_amount' => 'required|numeric|bail'
        ];
    }
}
