<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    use HasFactory;

    public function teasUsers()
    {
        return $this->belongsToMany(User::class, 'collection_tea_user')->withTimestamps();
    }
    
    public function teasCollections()
    {
        return $this->belongsToMany(Collection::class, 'collection_tea_user')->withTimestamps();
    }

    public function teasCharacteristics()
    {
        return $this->belongsToMany(Characteristic::class)->withTimestamps();
    }
}
