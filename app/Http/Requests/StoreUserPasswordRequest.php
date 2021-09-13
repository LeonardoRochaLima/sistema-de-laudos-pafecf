<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPasswordRequest extends FormRequest
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
            'current_password' => 'required',
            'password' => 'required',
            'password-confirm' => 'required'
        ];
    }

    public function messages(){
        return[
            'current_password.required' => 'Precisa colocar a senha atual para alterá-la.',
            'password.required' => 'Precisa digitar a nova senha.',
            'password-confirm.required' => 'Precisa confirmar a nova senha.'
        ];
    }
}
