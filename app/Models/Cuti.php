<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $fillable = ['users_id','id_jenis_cuti','tanggal_mulai','tanggal_selesai','keterangan','alasan_cuti','jumlah_hari','sisa_cuti'];
    public function karyawans()
    {
        // return $this->belongsTo(Karyawan::class,'id_karyawans');
        return $this->belongsTo(Karyawan::class,'id_karyawans','id');
        // return $this->belongsTo(Karyawan::class,'users_id');
    }
}
