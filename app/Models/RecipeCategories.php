<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategories extends Model
{
    protected $table = 'amd_recipe_categories';

    protected $fillable = ['category_name','description','active'];

    
}
