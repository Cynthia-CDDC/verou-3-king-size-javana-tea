<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function collectionUsers()
    {
        return $this->belongsToMany(User::class, 'collection_tea_user')->withTimestamps();
    }
    
    public function collectionTeas()
    {
        return $this->belongsToMany(Tea::class, 'collection_tea_user')->withTimestamps();
    }
}
