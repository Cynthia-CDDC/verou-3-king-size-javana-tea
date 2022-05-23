<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeaCharacteristic extends Model
{
    use HasFactory;

    public function tea()
    {
        return $this->belongsTo(Tea::class);
    }

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class);
    }
}
