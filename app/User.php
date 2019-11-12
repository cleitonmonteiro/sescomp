<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', "mail_verified_at",
        "created_at", "updated_at", "email_verified_at"
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function events()
    {
        return $this->belongsToMany('App\Models\Event');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Models\Activity');
    }

    public function supported_events()
    {
        return $this->belongsToMany('App\Models\Event', 'event_support');
    }


}
