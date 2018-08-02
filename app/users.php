<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class users extends Model implements Authenticatable
{
    protected $table='users1';
	use \Illuminate\Auth\Authenticatable;
	public function posts()
	{
		return $this->hasMany('App\Post');
	}
}
