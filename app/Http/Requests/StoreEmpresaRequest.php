<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
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
            'razao_social' => 'required',
            'nome_fantasia' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
            'cnpj' => 'required',
            'inscricao_estadual' => 'required',
            'inscricao_municipal' => 'required',
            'representante' => 'required',
            'cpf_representante' => 'required',
            'rg_representante' => 'required',
            'email_representante' => 'required',
        ];
    }
}
