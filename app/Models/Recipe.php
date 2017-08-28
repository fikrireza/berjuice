<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'amd_recipe';

    protected $fillable = ['recipe_category_id','recipe_name','ingredients','directions','post_time',
                            'recipe_image','recipe_image_thumb','active','show_homepage'];

    public function recipe_category()
    {
      return $this->belongsTo('App\Models\RecipeCategories', 'recipe_category_id');
    }
}
