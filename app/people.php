<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{

	protected $table = 'People';

	protected $fillable = [
        'code', 'oc_id', 'name','furigana','schoolname','taiken1','taiken2','taiken3','entry',
    ];

    public function mytaiken1()
    {
        return $this->hasOne('App\taiken','id','taiken1');
    }

    public function mytaiken2()
    {
        return $this->hasOne('App\taiken','id','taiken2');
    }

    public function mytaiken3()
    {
        return $this->hasOne('App\taiken','id','taiken3');
    }

    public function opencanpass()
    {
    	return $this->belongsTo('App\opencanpass','oc_id'); 
    }


}
