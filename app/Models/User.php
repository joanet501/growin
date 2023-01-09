<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Http\Resources\GardenResource;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function gardens()
    {
        return $this->hasMany(Garden::class);
    }

    protected function getPictureAttribute()
    {
        $name = Auth::user()->name;
        $name = "https://ui-avatars.com/api/?name=".$name."&size=256&color=fff&background=658354";
        return $name;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $forgetRules = [
        'email' => 'email',
    ];
}
