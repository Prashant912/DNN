<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TrendingNews extends Model
{
    protected $table = 'trending-news';
  	protected $fillable = ['img_title','img_name','short_description','long_description','status','date'];
}


