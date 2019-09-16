<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class featurevideo extends Model
{
  	protected $table = 'featuredvideos';
	protected $fillable = ['Video_title','Video_link','background_image_name','background_image_path','publish_date','status'];
}
