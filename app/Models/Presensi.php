<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    public function users()
    {
        //backup
        return $this->belongsTo(User::class,'users_id');
        // return $this->belongsTo(User::class, 'user_id', 'id');

    }
}
