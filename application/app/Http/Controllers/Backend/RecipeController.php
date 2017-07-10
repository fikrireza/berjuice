<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Recipe;
use App\Models\RecipeCategory;

use App\Models\AccessLog;

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
        $getRecipeCategory = RecipeCategory::where('flag_publish', 1)->get();

        return view('backend.recipe.add', compact('getRecipeCategory'));
    }

    public function store(Request $request)
    {
        $message = [
          'recipe_img.required' => 'This field is required.',
          'recipe_img.image' => 'Format not supported.',
          'recipe_img.max' => 'File size too big.',
          'recipe_img.dimensions' => 'Max file size 1366px X 494px.',
          'name.required' => 'This field is required.',
          'name.unique'  => 'This name already taken.',
          'category_id.required' => 'This field is required.',
          'ingredients.required' => 'This field is required.',
          'directions.required' => 'This field is required.',
          'publish_date.required' => 'This field is required.',
        ];

        $validator = Validator::make($request->all(), [
          'recipe_img' => 'required|image|mimes:jpeg,bmp,png|max:1000|dimensions:max_width=1366,max_height=494',
          'category_id' => 'required',
          'name' => 'required|unique:amd_recipe',
          'ingredients' => 'required',
          'directions'  => 'required',
          'publish_date'  => 'required',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('recipe.add')->withErrors($validator)->withInput();
        }
        dd($request);


    }
}
