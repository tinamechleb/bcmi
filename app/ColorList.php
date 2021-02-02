<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ColorList extends Model 
{
	

    protected $table = 'color_list';

    protected $guarded = ['id'];

    

	public function category() { return $this->belongsTo('App\ColorCategory'); } 
}