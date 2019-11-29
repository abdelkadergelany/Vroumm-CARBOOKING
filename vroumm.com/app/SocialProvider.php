<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //

      protected $fillable = [
        'userId', 'email', 'provider','socialId',
    ];
}
