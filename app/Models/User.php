<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    protected $fillable = [
        'user',
        'password',
        'credential'
    ];
      /**
     * The attributes that should be cast.
     * */
      /* @var array<string, string> */
     
    protected $casts = [
        'password' => 'hashed',
    ];

}
