<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable=['nama','nim','id_dosen'];
    public $timestamps=true;
    public function mahasiswa(){
        return $this->belongsTo('App\Mahasiswa','id_mahasiswa');
    }
}
