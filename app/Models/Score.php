<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'user_id',
        'score',
        'time_taken',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
