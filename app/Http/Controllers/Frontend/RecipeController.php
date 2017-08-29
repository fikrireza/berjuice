<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Excel;
use PDF;
use App\Models\Recipe;
use App\Models\RecipeCategories;
class RecipeController extends Controller
{
    function index(Request $request) {

		$call = Recipe::orderBy('post_time', 'desc')
		->where('active', 'Y')
        ->paginate(4);

        if ($request->ajax()) {
    		$view = view('frontend.recipe-page.ajax-list-recipe',compact('call'))->render();
            return response()->json(['html'=>$view]);
        }

	    return view('frontend.recipe-page.index', compact(
	    	'call'
    	));
	}
	function view($slug) {
		$call = Recipe::orderBy('post_time', 'desc')
		->where('active', 'Y')
        ->paginate(4);

        $get = Recipe::where('slug', $slug)
		->where('active', 'Y')
        ->first();

        if($get == null){
        	return view('errors.404');
        }

	    return view('frontend.recipe-page.view', compact(
	    	'call',
	    	'get'
	    ));
	}
	function print($slug){
		
		$get = Recipe::where('slug', $slug)
		->where('active', 'Y')
        ->first();
        
        if($get == null){
        	return view('errors.404');
        }

		$pdf = PDF::loadView('frontend.recipe-page.print', compact('get'));
	    return $pdf->download('Recipe '.$get->recipe_name.'.pdf');
	}
}
