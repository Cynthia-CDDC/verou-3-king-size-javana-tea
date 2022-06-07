<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionTeaUser extends Model
{
    use HasFactory;

    public $table = "collection_tea_user";

    public function intermUsers()
    {
        return $this->belongsToMany(User::class, 'collection_tea_user');

    }

    public function intermTeas()
    {
        return $this->belongsToMany(Tea::class, 'collection_tea_user');

    }

    public function intermCollections()
    {
        return $this->belongsToMany(Collection::class, 'collection_tea_user');

    }

}
