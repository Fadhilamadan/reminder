<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slot_mhs extends Model
{
    protected $table = "slot_mhs";
    
    public function mahasiswa()
    {
        return $this->belongsToMany('App\mahasiswaModel');
    }

    public function slot()
    {
        return $this->belongsToMany('App\slotModel');
    }
}
