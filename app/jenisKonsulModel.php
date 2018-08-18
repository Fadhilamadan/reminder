<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenisKonsulModel extends Model
{
    protected $table = "jenis_konsul";
    protected $fillable = [
        'nama'
    ];
}
