<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class banner_image_detail extends Model
{
	protected $table = 'banner_image';
  	protected $fillable = ['img_title','img_description','image_name','image_path','image_date'];
}
