<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliahMahasiswaPeriodeModel extends Model
{
	protected $table = "matakuliah_periode_mahasiswa";

    public function mahasiswa()
	{
	     return $this->belongsTo('App\mahasiswaModel');
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
