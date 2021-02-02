<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model 
{
	

    protected $table = 'images';

    protected $guarded = ['id'];

    

	public function category() { return $this->belongsTo('App\ImageCategory'); } 
}