<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\RecipeCategories;
use App\Models\Recipe;
use App\Models\LogAccess;

use Validator;
use Auth;

class RecipeCategoriesController extends Controller
{


    public function index()
    {
        $getRecipeCategories = RecipeCategories::get();

        return view('backend.recipeCategory.index', compact('getRecipeCategories'));
    }

    public function add()
    {
        return view('backend.recipeCategory.add');
    }

    public function store(Request $request)
    {
        $message = [
          'category_name.required' => 'This field is required.',
          'category_name.unique'  => 'This name has already taken.',
        ];

        $validator = Validator::make($request->all(), [
          'category_name' => 'required|unique:amd_recipe_categories',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('recipeCategory.add')->withErrors($validator)->withInput()->with('gagal', 'Recipe Category name has already taken');
        }

        $save = new RecipeCategories;
        $save->category_name = $request->category_name;
        // $save->description = $request->description;
        $save->active = 'Y';
        $save->save();

        $log = new LogAccess;
        $log->actor = Auth::user()->id;
        $log->action = "Create new recipe category ".$request->category_name;
        $log->save();

        return redirect()->route('recipeCategory.index')->with('berhasil', 'Recipe Category Successfully Created');

    }

    public function update(Request $request)
    {
        $message = [
  				'category_name.required' => 'This field required',
  				'category_name.unique' => 'This name has already taken',
  			];

  			$validator = Validator::make($request->all(), [
  				'category_name' => 'required|unique:amd_recipe_categories,category_name,'.$request->id,
  			], $message);

  			if($validator->fails())
  			{
  				return redirect()->route('recipeCategory.index')->withErrors($validator)->withInput();
  			}

        $update = RecipeCategories::find($request->id);
        $update->category_name = $request->category_name;
        $update->update();

        $log = new LogAccess;
        $log->actor = Auth::user()->id;
        $log->action = "Update recipe category ".$request->category_name;
        $log->save();

        return redirect()->route('recipeCategory.index')->with('berhasil', 'Recipe Category Successfully Updated');

    }


}
