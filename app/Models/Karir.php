<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lamaran;

class Karir extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function lamarans()
    {
        return $this->hasMany(Lamaran::class,'karir_id')->withDefault('-');;
        // 'id_jabatan','id')->withDefault('-');
    }
    // protected $fillable = ['nama_jabatan','lokasi','kualifikasi','deskripsi_lowongan','kategori_pekerjaan','status_loker'];
}
