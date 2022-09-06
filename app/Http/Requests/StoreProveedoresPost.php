<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedoresPost extends FormRequest
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
            'nombre'=>'required|min:4|Max:500',
            'correo'=>'required|min:5|Max:100',
            'telefono'=>'required|min:8|Max:15',
            'estado'=>'required|min:6|Max:8',
        ];
    }
}
