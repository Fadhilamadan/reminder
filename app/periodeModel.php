<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periodeModel extends Model
{
	protected $table = "periode";
    protected $fillable = [
        'nama_periode', 'date_start', 'date_end', 'isActive'
    ];

    public function has_matkulPeriodeDosen()
	{
	    return $this->hasMany('App\matkulPeriodeDosenModel');
	}
	
	public function has_kerjaPraktek()
	{
	    return $this->hasMany('App\kerjaPraktekModel');
	}

	public function has_tugasAkhir()
	{
	    return $this->hasMany('App\tugasAkhirModel');
	}
}
