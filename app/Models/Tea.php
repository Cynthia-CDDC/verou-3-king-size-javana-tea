<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    use HasFactory;

    public function users_teas()
    {
        return $this->hasMany(UserTea::class);
    }
    
    public function teas_characteristics()
    {
        return $this->hasMany(TeaCharacteristic::class);
    }
}
