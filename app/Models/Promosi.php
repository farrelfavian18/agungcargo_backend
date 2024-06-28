<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    use HasFactory;
    protected $fillable = ['id_karyawans','keterangan','surat_promosi','tanggal_promosi'];
    public function karyawans()
    {
        return $this->belongsTo(Karyawan::class,'id_karyawans');
        // return $this->belongsTo(Karyawan::class,'users_id');
    }
}
