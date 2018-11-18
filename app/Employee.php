<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'bankAccountNumber',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
