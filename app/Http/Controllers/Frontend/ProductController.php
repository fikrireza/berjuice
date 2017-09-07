<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    function index(){
    	$productName = [
			'FRESHLY SQUEEZED', 
			'PREMIUM CHILLED', 
			'DAILY JUICE', 
			'VITTORIA COFFEE', 
			'ESPRESSOTORIA MACHINE', 
			'PRIVATE LABEL'
		];
		$productUrl = [
			'freshly-squeezed', 
			'premium-chilled', 
			'daily-juice', 
			'victtoria-coffe', 
			'espressotoria-machine', 
			'private-label'
		];

    	return view('frontend.product-page.index', compact(
    		'productName',
    		'productUrl'
    	));
    }
    function freshlySqueezed(){
	    return view('frontend.product-page.freshly-squeezed');
    }
    function premiumChilled(){
    	$arrName = [
			'orange', 
			'orange unsweet', 
			'orange ace', 
			'apple', 
			'mango', 
			'pink guava', 
			'lemon', 
			'soursop', 
			'pineapple', 
			'green veggie', 
			'banana mix', 
			'orange mandarin', 
			'mangosteen'
		];
		$arrAvail = [
			1,1,1,1,1, 
			0,0,1,1,0, 
			0,1,1,0,0, 
			1,1,1,1,1, 
			1,1,1,1,1, 
			1,1,1,1,1, 
			0,0,1,0,0, 
			0,1,1,0,1, 
			0,0,0,0,1, 
			1,1,1,1,0, 
			1,1,1,1,0, 
			1,0,1,0,0, 
			1,0,1,0,0
		];
		$arrSize = [
			'<p>275ml</p>', 
			'<p>500ml</p>', 
			'<p>1l</p>', 
			'<p>2l</p>', 
			'<p>5l</p>'
		];
		$productDescript = [
			"
			<p>
				Premium Chilled Juice is our top of the line product. Within it we ensure that every sip retains the savory taste of the fresh fruit. We produce Premium Chilled Juice without heating process, and kept under 4 degree Celsius from raw material to finished goods. Products are delivered with refrigerated trucks, stored in extra cool chillers. With the shelf life of 8 weeks (the shortest shelf life in the industry, to ensure freshness of the juice), Premium Chilled Juice retains vitamins and nutrients highly beneficial for healthy, just like consuming fresh fruits.
			</p>
			",
			"
			<p>
				Premium Chilled Juice is our top of the line product. Within it we ensure that every sip retains the savory taste of the fresh fruit. We produce Premium Chilled Juice without heating process, and kept under 4 degree Celsius from raw material to finished goods. Products are delivered with refrigerated trucks, stored in extra cool chillers. 
			</p>
			<p>
				With the shelf life of 8 weeks (the shortest shelf life in the industry, to ensure freshness of the juice), Premium Chilled Juice retains vitamins and nutrients highly beneficial for healthy, just like consuming fresh fruits.
			</p>
			"
		];
    	return view('frontend.product-page.premium-chilled', compact(
    		'arrName',
    		'arrAvail',
    		'arrSize',
    		'productDescript'
    	));
    }
    function coffy(){
    	$arrTitle = [
    		'',
    		'',
    		'Beans', 
    		'Ground', 
    		'Capsule', 
    		'Capino Capsule Machine'
    	];
		$arrClass = [
			'',
			'',
			'Beans', 
			'Ground', 
			'Capsule', 
			'CapinoCapsuleMachine'
		];
		$arrDesc = [
			'',
			'',
			'Using only the highest grade of 100% Arabica coffee beans, we roast locally in Australia for freshness.',
			'Our ground coffee products are roasted, ground and packed into air-tight vacuum sealed packs to lock in flavour, aroma and freshness.',
			'Our range of Espressotoria compatible capsules are packed in Australia using the most sophisticated packing technology available.',
			'A compact and affordable automatic capsule machine. The Capino is available in matte black and will deliver seamless espressos for everyday use.'
		];
		$arrPackaging = [
			'beans', 
			'capsules'
		];
		$arrPackagingName = [
			'Espresso', 
			'Mountain Grown', 
			'Organic', 
			'Oro', 
			'Italian', 
			'Nero', 
			'Cinque Stelle'
		];
		$arrPackagingAvail = [
			1,1, 
			0,1, 
			0,1, 
			1,0, 
			0,1, 
			1,0, 
			1,0 
		];
    	return view('frontend.product-page.victtoria-coffe', compact(
    		'arrTitle',
    		'arrClass',
    		'arrDesc',
    		'arrPackaging',
    		'arrPackagingName',
    		'arrPackagingAvail'
    	));
    }
    function dailyJuice() {
    	$arrName = [
			'',
			'100% orange', 
			'mangosteen', 
			'pink guava', 
			'orange', 
			'soursop', 
			'apple', 
			'mandarin orange', 
			'banana mix', 
			'green veggies', 
			'coconut water', 
			'mango'
		];
	    return view('frontend.product-page.daily-juice', compact(
	    	'arrName'
	    ));
	}
}
