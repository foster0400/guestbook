<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class, 'signer_id', 'id');
    }
    public function sign()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    protected $table = 'signs';
    protected $fillable = [
        'signer_id', 'address', 'event_id','message',
    ];
}
