<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    public function Kos()
    {
    return $this->hasMany('App\Kos', 'fasilitas_parkir');
    }
}
