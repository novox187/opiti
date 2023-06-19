<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Reunion;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     *
     * */
     /*  @var array<int, string> */

/*     protected $hidden = [
        'password',
        'remember_token',
    ]; */

    /**
     * The attributes that should be cast.
     * */
      /* @var array<string, string> */
     
/*     protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ]; */

    public function reunion()
    {
        return $this->hasOne(Reunion::class, 'client_id');
    }
}
