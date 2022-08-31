<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
       
        return [
            'nombre' => 'required',
            'cantidad' => 'required',
            'valor' => 'required',
            'fecha_pedido' => 'required'
        ];
    }
}
