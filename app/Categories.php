<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function Articles()
    {
        return $this->belongsTo('App\Articles');
    }
}
