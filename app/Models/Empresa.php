<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PDV;

class Empresa extends Model
{   
    /**
     * Função responsável por fazer o relacionamento entre a empresa e o PDV.
     * @return void
     */
    public function pdvs()
    {
        return $this->hasMany(PDV::class,"id_empresa", "id");
    }
}
