<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kerjaPraktekModel extends Model
{
    protected $table = "kerja_praktek";
    protected $fillable = [
        'title', 'isActive'
    ];

    public function dosen_pembimbing()
    {
    	return $this->belongsTo('App\dosenModel');
    }

    public function mahasiswa_satu()
    {
    	return $this->belongsTo('App\mahasiswaModel');
    }

    public function mahasiswa_dua()
    {
    	return $this->belongsTo('App\mahasiswaModel');
    }

    public function periode()
    {
        return $this->belongsTo('App\periodeModel');
    }
}
