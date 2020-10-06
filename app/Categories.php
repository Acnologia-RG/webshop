<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	/* Articles
	makes Categories belong to Articles
	*/
    public function Articles()
    {
        return $this->belongsTo('App\Articles');
    }
}
