<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'amd_recipe';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'category_id','name','recipe_img','ingredients','directions','publish_date','show_homepage','flag_publish','actor_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\RecipeCategory', 'category_id');
    }
}
