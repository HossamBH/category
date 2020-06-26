<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = array('name', 'parent_id');
    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'id', 'parent_id');
    }

    public function sub_categories()
    {
    	return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
