<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function Articles()
	{
		return $this->belongsToMany('App\Articles');
	}
}
