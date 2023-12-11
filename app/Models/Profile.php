<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function profilePicture()
    {
        return $this->hasOne(ProfilePicture::class);
    }

    public function libraries()
    {
        return $this->hasMany(Library::class);
    }

    public function groupLibraries()
    {
        return $this->belongsToMany(GroupLibrary::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
