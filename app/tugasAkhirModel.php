<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugasAkhirModel extends Model
{
    protected $table = "tugas_akhir";
    protected $fillable = [
        'title', 'isActive'
    ];

    public function dosen_satu()
    {
    	return $this->belongsTo('App\dosenModel');
    }

    public function dosen_dua()
    {
    	return $this->belongsTo('App\dosenModel');
    }

    public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswaModel');
    }

    public function periode()
    {
        return $this->belongsTo('App\periodeModel');
    }
}
