<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    function index() {
		$arrName = [
			'', 
			'Chocolate Orange Cake', 
			'Jiggly Orange Wedges', 
			'Orange Glazed Ham Steak', 
			'Orange Chicken', 
			'Honey Orange BBQ Chicken', 
			'Citrus Chicken and Rice', 
			'Slow Cooker Orange Beef', 
			'Crispy Orange Beef'
		];
		$arrCate = [
			'', 
			'Dessert', 
			'Dessert', 
			'Entree', 
			'Entree', 
			'Entree', 
			'Entree', 
			'Entree', 
			'Entree'
		];
	    return view('frontend.recipe-page.index', compact(
	    	'arrName',
	    	'arrCate'
    	));
	}
	function view() {
		$arrName = [
			'', 
			'Chocolate Orange Cake', 
			'Jiggly Orange Wedges', 
			'Orange Glazed Ham Steak', 
			'Orange Chicken', 
			'Honey Orange BBQ Chicken', 
			'Citrus Chicken and Rice', 
			'Slow Cooker Orange Beef', 
			'Crispy Orange Beef'
		];
		$arrCate = [
			'', 
			'Dessert', 
			'Dessert', 
			'Entree', 
			'Entree', 
			'Entree', 
			'Entree', 
			'Entree', 
			'Entree'
		];
	    return view('frontend.recipe-page.view', compact(
	    	'arrName',
	    	'arrCate'
	    ));
	}
}
