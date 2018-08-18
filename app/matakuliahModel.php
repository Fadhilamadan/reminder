<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliahModel extends Model
{
	protected $table = "matakuliah";
    protected $fillable = [
        'id_matakuliah', 'name', 'isActive'
    ];

    public function has_matkulPeriodeDosen()
	{
	    return $this->hasMany('App\matkulPeriodeDosenModel');
	}
}
