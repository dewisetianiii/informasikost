<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
public function Kamar()
{
    return $this->belongsTo('App\Kamar', 'id_kamar');
}

public function Parkir()
{
    return $this->belongsTo('App\Parkir', 'id_parkir');
}

}
