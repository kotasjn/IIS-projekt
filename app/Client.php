<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'isLegalEntity',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}