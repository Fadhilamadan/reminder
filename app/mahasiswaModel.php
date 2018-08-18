<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
	protected $table = "mahasiswa";
    protected $fillable = [
        'nrp', 'name', 'password', 'photo', 'isActive'
    ];

	public function has_matkulPeriodeMahasiswa()
	{
	    return $this->hasMany('App\matakuliahMahasiswaPeriodeModel');
	}

	public function has_tugasAkhir()
	{
	    return $this->hasOne('App\tugasAkhirModel');
	}

	public function has_slot()
	{
	    return $this->hasMany('App\slotModel');
	}

	public function has_chat()
	{
	    return $this->hasMany('App\chatModel');
	}

	public function has_kerjaPraktek()
	{
	    return $this->hasOne('App\kerjaPraktekModel');
	}

	public function slot_mhss()
    {
        return $this->hasMany('App\slot_mhs');
    }
}
