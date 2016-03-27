<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialPayment extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'status'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
