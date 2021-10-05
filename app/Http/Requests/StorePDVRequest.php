<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePDVRequest extends FormRequest
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
            'nome_comercial' => 'required',
            'versao' => 'required',
            'nome_principal_executavel' => 'required',
            'linguagem' => 'required',
            'sistema_operacional' => 'required',
            'data_base' => 'required',
            'aplicacoes_especiais' => 'required',
            'forma_impressao' => 'required',
            'perfis' => 'required',
        ];
    }

    public function messages(){
        return[
            'nome_comercial' => 'O campo referente ao nome comercial é obrigatório',
            'versao' => 'O campo referente a versao é obrigatório',
            'nome_principal_executavel' => 'O campo referente ao nome do executável principal é obrigatório',
            'linguagem' => 'O campo referente a linguagem é obrigatório',
            'sistema_operacional' => 'O campo referente ao sistema operacional é obrigatório',
            'data_base' => 'O campo referente ao banco de dados é obrigatório',
            'aplicacoes_especiais' => 'O campo referente as aplicações especiais é obrigatório',
            'forma_impressao' => 'O campo referente as formas de impressão é obrigatório',
            'perfis' => 'O campo referente aos perfis é obrigatório'
        ];
    }
}
