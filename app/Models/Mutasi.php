<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    use HasFactory;
    protected $fillable = ['id_karyawans','keterangan','surat_mutasi','tanggal_mutasi'];
     public function karyawans()
    {
        // return $this->belongsTo(Karyawan::class,'id_karyawans');
        return $this->belongsTo(Karyawan::class,'id_karyawans','id');
        // return $this->belongsTo(Karyawan::class,'users_id');
    }
}
