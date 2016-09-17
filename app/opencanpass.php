<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opencanpass extends Model
{
    protected $table = 'Opencanpass';

	protected $fillable = [
        'date',
    ];

    public function people()
    {
    	return $this->hasMany('App\people'); 
    }

    public function taiken1()
    {
    	return $this->belongsToMany('App\taiken','oc_taiken1','taiken_id','oc_id');
    }

    public function taiken2()
    {
    	return $this->belongsToMany('App\taiken','oc_taiken2','taiken_id','oc_id');
    }

    public function taiken3()
    {
    	return $this->belongsToMany('App\taiken','oc_taiken3','taiken_id','oc_id');
    }

}
