<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';

	protected $fillable = ['first_name', 'last_name', 'dob', 'email', 'sex_id'
	];

	protected $primaryKey = 'id';

	public $timestamps = false;
}