<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index(){
    	$productName	= [
    		'', 
    		'FRESHLY SQUEEZED', 
    		'PREMIUM CHILLED', 
    		'VITTORIA COFFEE'
    	];
		$productUrl		= [
			'', 
			'freshly-squeezed', 
			'premium-chilled', 
			'victtoria-coffe'
		];
		$productDesc	= [
			"",
			"For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day.",
			"For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day.",
			"Vittoria is Australia's No.1 pure coffee company, sourcing only premium 100% Arabica coffee beans to provide the highest quality coffee blends available."
		];

		$sosmedIcon = [
			'facebook',
			'instagram',
			'twitter'
		];
		$sosmedUrl = [
			'https://www.facebook.com/Juiceunited/',
			'https://www.instagram.com/Juiceunited/',
			'https://twitter.com/Juiceunited/'

		];

		$itemsIg = [];

    	$client = new \GuzzleHttp\Client;

	    $response = $client->get('https://www.instagram.com/Juiceunited/media');

	    $itemsIg = json_decode((string) $response->getBody(), true)['items'];

    	return view('frontend.home-page.index', compact(
    			'productName',
    			'productUrl',
    			'productDesc',
    			'sosmedIcon',
    			'sosmedUrl',
    			'itemsIg'
    		));
    }
}
