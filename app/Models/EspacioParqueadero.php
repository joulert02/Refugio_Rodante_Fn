<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EspacioParqueadero extends Model
{
    protected $table = 'espacios_parqueadero';

    // Relación con parqueadero
    public function parqueadero()
    {
        return $this->belongsTo(Parqueadero::class, 'parqueadero_id');
    }
}
