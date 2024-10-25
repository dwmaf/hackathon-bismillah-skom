<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recycle extends Model
{
    protected $fillable = [
        'merk_id',
        'model' ,
            'kondisi',
            'foto',
            'lokasi',
            'deskripsi'
    ];
}
