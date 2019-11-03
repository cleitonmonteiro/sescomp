<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function activities()
    {
        return $this->hasMany('App\Activity');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
