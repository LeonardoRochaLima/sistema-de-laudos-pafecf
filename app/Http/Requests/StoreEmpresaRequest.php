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
            'cnpj' => 'required|max:18',
            'representante' => 'required',
            'cpf_representante' => 'required',
            'rg_representante' => 'required',
            'email_representante' => 'required',
        ];
    }

    public function messages(){
        return[
            'razao_social.required' => 'O campo razão social é obrigatório',
            'nome_fantasia.required' => 'O campo nome fantasia é obrigatório',
            'endereco.required' => 'O campo endereço é obrigatório',
            'bairro.required' => 'O campo bairro é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
            'uf.required' => 'O campo UF é obrigatório',
            'cep.required' => 'O campo CEP é obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório',
            'celular.required' => 'O campo celular é obrigatório',
            'cnpj.required' => 'O campo CNPJ é obrigatório',
            'representante.required' => 'O campo Representante é obrigatório',
            'cpf_representante.required' => 'O campo CPF é obrigatório',
            'rg_representante.required' => 'O campo RG é obrigatório',
            'email_representante.required' => 'O campo Email é obrigatório',

            'cnpj.max' => 'O cnpj não pode ter mais de 18 caracteres.'
        ];
    }
}
