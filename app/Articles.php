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
	
	protected function orders()
    {
        return $this->belongsToMany('App\Order', 'artical_order', 'article_id' , 'order_id');
    }
}
