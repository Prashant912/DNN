<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class latest_new extends Model
{
    protected $table = 'latest_news';
  	protected $fillable = ['news_id','img_title','img_name','short_description','long_description','status','fetured_image',];

  	public function NewsCat()
  	{
  		return $this->hasOne('App\Model\NewsCategory', 'id', 'news_id');
  	}
}
