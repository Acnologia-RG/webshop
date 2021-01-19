<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	/* Articles
	makes Orders belong to Articles
	*/
	public function Articles()
	{
		return $this->belongsToMany('App\Articles');
	}

	/* User
	makes Orders belong to User
	*/
	public function User()
	{
		return $this->belongsTo('App\User');
	}

	/* fillable
	fills in the given values into the database
	*/
	protected $fillable = ['address', 'location', 'total_price', 'user_id'];
}