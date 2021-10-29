<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class PDV extends Model
{
    protected $table = "pdvs";
    protected $fillable = ['id_empresa', 'nome_comercial', 
    'versao', 'nome_principal_executavel', 'linguagem', 
    'sistema_operacional', 'data_base', 'tipo_desenvolvimento',
    'tipo_funcionamento', 'nfe', 'sped', 'nfce', 
    'tratamento_interrupcao', 'integracao_paf', 
    'aplicacoes_especiais', 'forma_impressao', 'perfis'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, "id_empresa", "id");
    }

    public function laudo()
    {
        return $this->belongsTo(Laudo::class, "id_pdv", "id");
    }

    public function setCategoryAttribute($value)
    {
        $this->attributes['aplicacoes_especiais'] = json_encode($value);
        $this->attributes['forma_impressao'] = json_encode($value);
        $this->attributes['perfis'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['aplicacoes_especiais'] = json_decode($value);
        return $this->attributes['forma_impressao'] = json_decode($value);
        return $this->attributes['perfis'] = json_decode($value);
    }
}
