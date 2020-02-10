<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public function Kos()
    {
    return $this->hasMany('App\Kos', 'fasilitas_kamar');
    }
}
