<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'paternal_name',
        'maternal_name',
        'email',
        'phone_number',
        'credit_card_number'       
    ];
}
