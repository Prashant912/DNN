<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demo_post extends Model
{
   	protected $table = 'demo_posts';
  	protected $fillable = ['title','category','tag'];
}
