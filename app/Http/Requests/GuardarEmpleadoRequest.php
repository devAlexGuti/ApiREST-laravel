<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarEmpleadoRequest extends FormRequest
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
            "nombres"   => "required",
            "apellidos" => "required",
            "domicilio" => "required",
            "dni"       => "required|unique:empleados,dni",
        ];
    }

    public function messages()
    {
        return [
            'dni.unique' => 'El DNI ya se encuentra registrado'
        ];
    }
}
