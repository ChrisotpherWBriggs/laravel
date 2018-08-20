<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
    	'name',
    	'description',
    	'company_id',
    	'user_id',
    	'days',
    ];

    public_function user(){
        return $this->belongsTo('App\User');
    }

    public_function company(){
        return $this->belongsTo('App\Company');
    }

    public_function users(){
        return $this->belongsToMany('App\User');

    }
}