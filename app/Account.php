<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	public $timestamps = false;
	protected $connection = 'account';
	protected $primaryKey = 'id';
}
