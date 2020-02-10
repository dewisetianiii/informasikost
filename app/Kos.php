<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
public function Kamar()
{
    return $this->belongTo('App\Kamar', 'id_kamar');
}

public function Parkir()
{
    return $this->belongTo('App\Parkir', 'id_parkir');
}

}
