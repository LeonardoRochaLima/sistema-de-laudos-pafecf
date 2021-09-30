<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PDV;

class Empresa extends Model
{
    public function pdvs()
    {
        return $this->hasMany(PDV::class);
    }
}
