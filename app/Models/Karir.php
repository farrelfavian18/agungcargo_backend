<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable = ['nama_jabatan','lokasi','kualifikasi','deskripsi_lowongan','kategori_pekerjaan','status_loker'];
}
