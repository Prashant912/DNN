<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    protected $table = 'contact_us';
	protected $fillable = ['fname','lname','email','phone','message'];
}
