<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGithub extends Model
{
    //
    protected $table = 'user_github';

    protected $fillable = [
        'avatar_url', 'login', 'name', 'email', 'company', 'location', 'html_url',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
