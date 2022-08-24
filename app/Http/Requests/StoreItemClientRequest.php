<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemClientRequest extends FormRequest
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
            'nombre' => 'required|alpha',
            'fecha_isntalacion' => 'required',
            'descripcion' => 'required|alpha',
            'obvervaciones' => 'required|alpha',
            'branch_office_id' => 'required'
        ];
    }
}
