<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chatModel extends Model
{
 	protected $table = "chat";
    protected $fillable = [
        'content', 'date', 'from', 'to', 'isActive'
    ];

    public function dosen()
    {
    	return $this->belongsTo('App\dosenModel');
    }

    public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswaModel');
    }
}
