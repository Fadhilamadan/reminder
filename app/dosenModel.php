<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenModel extends Model
{
	protected $table = "dosen";
    protected $fillable = [
        'npk', 'name', 'password', 'photo', 'acceptKP', 'acceptTA', 'isActive', 'intensitas_mahasiswa', 'reminder_time'
    ];

    public function has_matkulPeriodeDosen()
	{
	    return $this->hasMany('App\matkulPeriodeDosenModel');
	}

	public function has_tugasAkhir()
	{
	    return $this->hasMany('App\tugasAkhirModel');
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
	    return $this->hasMany('App\kerjaPraktekModel');
	}
}
