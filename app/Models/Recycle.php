<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Recycle extends Model
{
    public function merk(){
        return $this->belongsTo(Merk::class);
    }
    public function mitra(){
        return $this->belongsTo(mitra::class);
    }
    protected $fillable = [
        'merk_id',
        'model' ,
            'kondisi',
            'foto',
            'lokasi',
            'deskripsi'
    ];
}
