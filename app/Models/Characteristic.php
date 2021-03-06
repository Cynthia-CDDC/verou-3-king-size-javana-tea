<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    public function teasCharacteristics()
    {
        return $this->belongsToMany(Tea::class)->withTimestamps();
    }
}
