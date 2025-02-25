<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    //use hasfactory;

    protected $fillable =[
        'jenis',
        'konsekuensi',
        'poin',
    ];
}
