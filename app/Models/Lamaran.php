<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Karir;

class Lamaran extends Model
{
    use HasFactory;
    protected $guarded = [];
     public function karirs()
    {
        return $this->belongsTo(Karir::class);
    }
}

