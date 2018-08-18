<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slotModel extends Model
{
    protected $table = "slot";
    protected $fillable = [
        'date', 'start', 'end', 'place', 'detail', 'isRequest', 'status', 'jenis_konsul_id', 'dosen_id', 'mahasiswa_id'
    ];

    public function dosen()
    {
    	return $this->belongsTo('App\dosenModel');
    }

    public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswaModel');
    }

    public function slot_mhss()
    {
        return $this->hasMany('App\slot_mhs');
    }
}
