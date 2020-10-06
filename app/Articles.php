<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
	/* Categories
	makes Articles belong to Categories
	*/
    public function Categories()
    {
        return $this->belongsTo('App\Categories');
    }
}
