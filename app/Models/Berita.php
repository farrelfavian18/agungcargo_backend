<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $guarded =[];
    // protected $primaryKey = 'id';
    // protected $table = 'beritas';
    protected $fillable = ['judul_berita','isi_berita','foto_berita'];
}
