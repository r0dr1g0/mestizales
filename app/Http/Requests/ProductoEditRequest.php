<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoEditRequest extends FormRequest
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
            'nombre' => 'unique:productos,nombre, ' . $this->producto. '|required',
        ];

        // ** ESTA FUCION ES PARA CUANDO TRABAJAMOS CON ROUTE MODEL BANDING ********************
        // $producto = $this->route('producto');

        // return [
        //     'nombre' => ['required, 'min:3', 'unique:productos,nombre, ' . $producto->id],
        // ];
    }
}
