<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'begin_date',
        'end_date'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    public function supporter()
    {
        return $this->belongsToMany('App\User', 'event_support');
    }

    public function activitiesHours(DateTime $time)
    {
        $act = $this->activities()->where(
            'begin_date','<=',$time
        )->where(
            'end_date','>=',$time
        )->orderBy('begin_date','asc')->get();
        return $act;
    }
}
