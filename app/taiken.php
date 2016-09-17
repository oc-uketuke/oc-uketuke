<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taiken extends Model
{
	protected $table = 'Taiken';

    protected $fillable = [
        'field', 'name',
    ];

    public function people()
    { 
        return $this->belongsTo('App\people','id'); 
    }


}
