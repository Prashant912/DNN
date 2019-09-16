<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
	protected $table = 'location';
	protected $fillable = ['description','address','contact_number','fax','email','status'];
}
