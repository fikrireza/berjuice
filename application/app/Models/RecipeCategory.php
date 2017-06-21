<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategory extends Model
{
    protected $table = 'amd_recipe_categories';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'category_name','category_description','publish_date','flag_publish','actor_id'
    ];

    public function recipe()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
