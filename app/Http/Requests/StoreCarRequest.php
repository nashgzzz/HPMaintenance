<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'patente' => 'required',
            'color' => 'required|alpha',
            'descripcion' => 'required|alpha',
            'car_models_id' => 'required',
            'user_id' => 'required'
        ];
    }
}
