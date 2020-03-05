<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public function kos()
    {
    return $this->belongsToMany('App\Kos', 'kamar_kos', 'id_kamar', 'id_kos');
    }
}
