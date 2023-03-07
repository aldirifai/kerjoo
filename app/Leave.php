<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = [
        'user_id', 'leave_date', 'duration', 'reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
