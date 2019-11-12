<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'name',
        'hours',
        'begin_date',
        'end_date'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
