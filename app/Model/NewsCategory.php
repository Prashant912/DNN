<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'latest_news_category';
  	protected $fillable = ['category_title','status'];

  	public function newsaCategoryImageList()
  	{
  		return $this->hasMany('App\Model\latest_new', 'news_id', 'id')->where('status','active')->where('fetured_image','0');
  	}
  	
  	public function featuredImage()
  	{
  		return $this->hasMany('App\Model\latest_new', 'news_id', 'id')->where('status','active')->where('fetured_image','1');
  	}
}
