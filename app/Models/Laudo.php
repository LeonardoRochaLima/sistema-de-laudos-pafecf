<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class laudo extends Model
{
    protected $fillable = ['razao_social_empresa',
   'nome_comercial_pdv', 'homologador', 'data_inicio',
   'data_termino', 'envelope_seguranca_marca', 'envelope_seguranca_modelo',
   'numero_envelope', 'requisitos_executados_sgbd', 'executavel_sgbd',
   'funcao_sped', 'executavel_sped', 'executavel_nfe', 'parecer_conclusivo',
   'ecf_analise_marca', 'ecf_analise_modelo', 'ecfs_compativeis_pdv', 'comentarios'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['ecfs_compativeis_pdv'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['ecfs_compativeis_pdv'] = json_decode($value);
    }
}