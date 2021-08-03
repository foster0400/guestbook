<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
    public function sign()
    {
        return $this->hasMany(Sign::class, 'event_id');
    }

    protected $table = 'events';
    protected $fillable = [
        'creator_id', 'title', 'description','isOpened',
    ];
}
