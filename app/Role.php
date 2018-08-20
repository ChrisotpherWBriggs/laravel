<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
    	'name',
    ];

    public_function users(){
        return $this->hasMany('App\User');
    }
}
