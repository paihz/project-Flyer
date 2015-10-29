<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'flyer_photos';

    protected $fillable = ['pohoto'];

    public function flyer()
    {
    	return $this->belongsTo('App\Flyer');
    }
}
