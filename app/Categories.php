<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function articles()
    {
        return $this->belongsTo('App\Articles');
    }
}
