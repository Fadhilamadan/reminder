<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkulPeriodeDosenModel extends Model
{
	protected $table = "matakuliah_periode_dosen";

    public function dosen()
	{
	     return $this->belongsTo('App\dosenModel');
	}
	
	public function matakuliah()
	{
	     return $this->belongsTo('App\matakuliahModel');
	}

	public function periode()
	{
	     return $this->belongsTo('App\periodeModel');
	}
}
