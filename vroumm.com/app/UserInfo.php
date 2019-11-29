<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //
     protected $fillable = [
        'phone1', 'phone2', 'profilepict','userId',
    ];
}
