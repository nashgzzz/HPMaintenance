<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVoucherRequest extends FormRequest
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
            'nombre' => 'required',
            'serie' =>  'required',
            'Hora_llegada' =>  'required',
            'Hora_salida' => 'required',
            'fecha' => 'required',
            'observaciones' => 'required',
            'branch_office_id' => 'required',
            'product_client_vouchers' => 'required'
        ];
    }
}
