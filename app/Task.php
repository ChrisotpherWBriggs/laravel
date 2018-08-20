<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
    	'name',
    	'days',	
    	'hours',	
    	'project_id',
    	'user_id',
    	'company_id',
    ];

    public_function user(){
        return $this->belongsTo('App\User');
    }

    public_function project(){
        return $this->belongsTo('App\Project');
    }

    public_function companies(){
        return $this->belongsTo('App\Company');
    }

    public_function users(){
		return $this->belongsToMany('App\User');

    }
}
