<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];


    public function profile()
    {
    return $this->hasOne(UserProfile::class);
    }


    public function moods()
    {
    return $this->hasMany(Mood::class);
    }


    public function aiInteractions()
    {
    return $this->hasMany(AiInteraction::class);
    }
}