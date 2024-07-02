<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $guarded =[];
    // protected $table = 'karyawans';
    public function users()
    {
        //backup
        return $this->belongsTo(User::class,'users_id');
        // return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function promosis()
    {
        // return $this->hasMany(Promosi::class,'id_karyawans');
        //backup
        // return $this->hasMany(Promosi::class, 'id_karyawans','id');
        // return $this->hasMany(Promosi::class);
        return $this->hasMany(Promosi::class, 'id_karyawans', 'id');
    }

    public function demosi()
    {
        return $this->hasMany(Demosi::class, 'id_karyawans', 'id');
    }

    public function mutasi()
    {
        return $this->hasMany(Mutasi::class, 'id_karyawans', 'id');
    }

    public function phk()
    {
        return $this->hasMany(Phk::class, 'id_karyawans', 'id');
    }
    public function cuti()
    {
        return $this->hasMany(Cuti::class, 'id_karyawans', 'id');
    }
    // protected $fillable = ['nama','foto_karyawan','email','no_telpon','alamat'];
}
