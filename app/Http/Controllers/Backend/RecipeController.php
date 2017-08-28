<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Recipe;
use App\Models\RecipeCategories;
use App\Models\LogAccess;



use Auth;
use DB;
use Validator;

class RecipeController extends Controller
{

    public function index()
    {
        $getRecipe = Recipe::get();

        return view('backend.recipe.index', compact('getRecipe'));
    }

    public function add()
    {
        $getRecipeCategory = RecipeCategories::where('active', 'Y')->get();

        return view('backend.recipe.add', compact('getRecipeCategory'));
    }

    public function store(Request $request)
    {
      dd($request);
      
        $message = [
          'recipe_image.required' => 'This field is required.',
          'recipe_image.image' => 'Format not supported.',
          'recipe_image.max' => 'File size too big.',
          'recipe_image.dimensions' => 'Max file size 1366px X 494px.',
          'name.required' => 'This field is required.',
          'name.unique'  => 'This name already taken.',
          'recipe_category_id.required' => 'This field is required.',
          'ingredients.required' => 'This field is required.',
          'directions.required' => 'This field is required.',
          'post_time.required' => 'This field is required.',
        ];

        $validator = Validator::make($request->all(), [
          'recipe_image' => 'required|image|mimes:jpeg,bmp,png|max:1999|dimensions:max_width=1560,max_height=695',
          'recipe_category_id' => 'required',
          'name' => 'required|unique:amd_recipe',
          'ingredients' => 'required',
          'directions'  => 'required',
          'post_time'  => 'required',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('recipe.add')->withErrors($validator)->withInput();
        }


    }
}
