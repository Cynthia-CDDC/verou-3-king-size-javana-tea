<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTea extends Model
{
    use HasFactory;

    public function tea()
    {
        return $this->belongsTo(Tea::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
