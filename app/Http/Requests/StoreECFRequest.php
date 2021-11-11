<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreECFRequest extends FormRequest
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
            'marca' => 'required',
            'modelo' => 'required',
        ];
    }

    public function messages(){
        return[
            'marca.required' => 'O campo marca é obrigatório',
            'modelo.required' => 'O campo modelo é obrigatório',
        ];
    }
}
