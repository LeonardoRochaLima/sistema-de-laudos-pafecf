<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PDV;


class Laudo extends Model
{
    protected $table = "laudos";
    protected $fillable = ['razao_social_empresa',
   'nome_comercial_pdv', 'homologador', 'data_inicio',
   'data_termino', 'envelope_seguranca_marca', 'envelope_seguranca_modelo',
   'numero_envelope', 'requisitos_executados_sgbd', 'executavel_sgbd',
   'funcao_sped', 'executavel_sped', 'executavel_nfe', 'parecer_conclusivo',
   'ecf_analise_marca', 'ecf_analise_modelo', 'relacao_ecfs', 'comentarios'];
    
    public function setCategoryAttribute($value)
    {
        $this->attributes['relacao_ecfs'] = json_encode($value);
    }

    public function pdvs()
    {
        return $this->hasMany(PDV::class,"id_pdv", "id");
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['relacao_ecfs'] = json_decode($value);
    }
}