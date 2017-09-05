<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Recipe;
use App\Models\RecipeCategories;
use App\Models\LogAccess;


use Image;
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
        $message = [
          'recipe_image.required' => 'This field is required.',
          'recipe_image.image' => 'Format not supported.',
          'recipe_image.max' => 'File size too big.',
          'recipe_image.dimensions' => 'Max file size 1366px X 494px.',
          'recipe_name.required' => 'This field is required.',
          'recipe_name.unique'  => 'This name already taken.',
          'recipe_category_id.required' => 'This field is required.',
          'ingredients.required' => 'This field is required.',
          'directions.required' => 'This field is required.',
          'post_time.required' => 'This field is required.',
          'serves.required' => 'This field is required.',
        ];

        $validator = Validator::make($request->all(), [
          'recipe_image' => 'required|image|mimes:jpeg,bmp,png|max:1999|dimensions:max_width=1560,max_height=899',
          'recipe_category_id' => 'required',
          'recipe_name' => 'required|unique:amd_recipe',
          'ingredients' => 'required',
          'directions'  => 'required',
          'serves'  => 'required',
          'post_time'  => 'required',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('recipe.add')->withErrors($validator)->withInput();
        }

        DB::transaction(function() use($request){
          $image = $request->file('recipe_image');
          $image_thumb = $request->file('recipe_image');


          $save = new Recipe;
          $save->recipe_category_id = $request->recipe_category_id;
          $save->recipe_name = $request->recipe_name;
          $save->ingredients = $request->ingredients;
          $save->directions = $request->directions;
          $save->serves = $request->serves;
          $save->post_time = $request->post_time;
          $save->show_homepage = $request->show_homepage or 'N';
          $save->slug = str_slug($request->recipe_name,'-');

          $salt = str_random(4);
          $img_url = str_slug($request->recipe_name,'-').'-large-'.$salt. '.' . $image->getClientOriginalExtension();
          Image::make($image)->save('amadeo/image/recipe/'. $img_url);

          $img_url_thumb = str_slug($request->recipe_name,'-').'-thumb-'.$salt. '.' . $image_thumb->getClientOriginalExtension();
          Image::make($image_thumb)->fit(350, null)->save('amadeo/image/recipe/'. $img_url_thumb);

          $save->recipe_image = $img_url;
          $save->recipe_image_thumb = $img_url_thumb;
          $save->save();


          $log = new LogAccess;
          $log->actor = Auth::user()->id;
          $log->action = 'Create New Recipe '.$request->recipe_name;
          $log->save();
        });

        return redirect()->route('recipe.index')->with('berhasil', 'Recipe Successfully Created');

    }

    public function see($id)
    {
        $getRecipe = Recipe::find($id);

        if(!$getRecipe){
          abort(404);
        }

        $getRecipeCategory = RecipeCategories::get();

        return view('backend.recipe.view', compact('getRecipe','getRecipeCategory'));
    }

    public function update(Request $request)
    {
        $message = [
          'recipe_name.required' => 'This field is required.',
          'recipe_name.unique'  => 'This name already taken.',
          'recipe_category_id.required' => 'This field is required.',
          'ingredients.required' => 'This field is required.',
          'directions.required' => 'This field is required.',
          'post_time.required' => 'This field is required.',
          'serves.required' => 'This field is required.',
        ];

        $validator = Validator::make($request->all(), [
          'recipe_category_id' => 'required',
          'recipe_name' => 'required|unique:amd_recipe,recipe_name,'.$request->id,
          'ingredients' => 'required',
          'directions'  => 'required',
          'post_time'  => 'required',
          'serves'  => 'required',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('recipe.see', ['id' => $request->id ])->withErrors($validator)->withInput();
        }

        DB::transaction(function() use($request){
          $save = Recipe::find($request->id);
          $save->recipe_category_id = $request->recipe_category_id;
          $save->recipe_name = $request->recipe_name;
          $save->ingredients = $request->ingredients;
          $save->directions = $request->directions;
          $save->post_time = $request->post_time;
          $save->serves = $request->serves;

          $save->show_homepage = $request->show_homepage == null ? 'N' : $request->show_homepage;
          $save->active = $request->active == null ? 'N' : $request->active;
          $save->slug = str_slug($request->recipe_name,'-');
          $save->save();

          $log = new LogAccess;
          $log->actor = Auth::user()->id;
          $log->action = 'Update Recipe '.$request->recipe_name;
          $log->save();
        });

        return redirect()->route('recipe.see', ['id' => $request->id ])->with('berhasil', 'Recipe Successfully Updated');

    }

    public function uploadImage(Request $request)
    {
        $message = [
          'recipe_image.required' => 'This field is required.',
          'recipe_image.image' => 'Format not supported.',
          'recipe_image.max' => 'File size too big.',
          'recipe_image.dimensions' => 'Max file size 1366px X 494px.',
        ];

        $validator = Validator::make($request->all(), [
          'recipe_image' => 'required|image|mimes:jpeg,bmp,png|max:1999|dimensions:max_width=1560,max_height=899',
        ], $message);


        if($validator->fails())
        {
          return redirect()->route('recipe.see', ['id' => $request->id ])->withErrors($validator)->withInput();
        }

        DB::transaction(function() use($request){
          $image = $request->file('recipe_image');
          $image_thumb = $request->file('recipe_image');


          $save = Recipe::find($request->id);
          $salt = str_random(4);
          $img_url = str_slug($request->recipe_name,'-').'-large-'.$salt. '.' . $image->getClientOriginalExtension();
          Image::make($image)->save('amadeo/image/recipe/'. $img_url);

          $img_url_thumb = str_slug($request->recipe_name,'-').'-thumb-'.$salt. '.' . $image_thumb->getClientOriginalExtension();
          Image::make($image_thumb)->fit(350, null)->save('amadeo/image/recipe/'. $img_url_thumb);

          $save->recipe_image = $img_url;
          $save->recipe_image_thumb = $img_url_thumb;
          $save->save();


          $log = new LogAccess;
          $log->actor = Auth::user()->id;
          $log->action = 'Create New Recipe '.$request->recipe_name;
          $log->save();
        });

        return redirect()->route('recipe.see', ['id' => $request->id])->with('berhasil', 'Recipe Image Successfully Update');
    }
}
