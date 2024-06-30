<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demosi extends Model
{
    use HasFactory;
    protected $fillable = ['id_karyawans','keterangan','surat_demosi','tanggal_promosi'];

    public function karyawans()
    {
        return $this->belongsTo(Karyawan::class,'id_karyawans');
    }
}
