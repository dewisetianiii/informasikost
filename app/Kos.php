<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{

    protected $fillable = ['nama', 'alamat', 'harga', 'luas_kamar', 'gambar', 'telepon'];
    public $timestamps = true;

    public function kamar()
    {
        return $this->belongsToMany('App\Kamar', 'kamar_kos', 'id_kamar', 'id_kos');
    }

    // public function Kamar()
    // {
    //     return $this->belongsToMany('App\Kamar', 'id_kamar');
    // }

// public function Parkir()
// {
//     return $this->belongsTo('App\Parkir', 'id_parkir');
// }

}
