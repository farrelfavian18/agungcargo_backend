<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phk extends Model
{
    use HasFactory;

    public function karyawans()
    {
        // return $this->belongsTo(Karyawan::class,'id_karyawans');
        return $this->belongsTo(Karyawan::class,'id_karyawans','id');
        // return $this->belongsTo(Karyawan::class,'users_id');
    }
}

