<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    function index(){
		$milestonesContent = [
			"
			<h3>1992</h3>
			<p>
				Joint-Venture company with National Foods Limited Australia. We are the pioneer in Indonesian Juice market with vast experience, technology and quality assurance of Berri Australia in making and delivering the finest juice beverage since 1992
			</p>
			",
			"
			<h3>2011</h3>
			<p>
				Armed with decade of experience in F&B industry, combined with extensive knowledge, technology, quality assurance, and necessary supply chain, PT. Berri Indosari initiate the major product innovation under \"Juice United\" brand. This initiative is aimed primarily to better cater & serve Indonesian unique market demand so as to better fit the local palate and preferences.
			</p>
			<p>
				Since its inception, PT. Berri Indosari have proven strong foundation of success by consistently provide consumers with high quality, rich, nutritious, fresh and healthy juice on daily basis. The good relationship between the company and Berri Australia remain strong, further proven by the grant of sole distributorship of Berri Brand for UHT Juices.
			</p>
			<p>
				PT. Berri Indosari currently employs more than 300 employees, two manufacturing facilities and an extensive distribution network in Java and outer island. The company primary business focus is on production of freshly squeezed orange (365 days a year) and non–pasteurized chilled fruit juice.
			</p>
			",
			"
			<h3>2016</h3>
			<p>
				Obtained HACCP (Hazard Analysis and Critical Control Points) certification for food safety management and product quality from Tuv nord for both production facilities in Cikande and Bali
			</p>
			",
			"
			<h3>2017</h3>
			<p>
				Obtained ISO 22000:2005 certification from Tuv Nord for both production facilities located in Cikande and Bali; Obtained distributorship of Vittoria Coffee for Indonesia.
			</p>
			"
		];
		$ovcArr = [
			'Hypermart',
			'Hotels',
			'Supermarkets',
			'Restaurants',
			'Minimarket',
			'Cafes',
			'Speciality Stores',
			'Caterings',
			'Hospitals',
			'Airlanes',
			'Private Label',
			'Institution'
		];
    	return view('frontend.about-page.index', compact(
    		'milestonesContent',
    		'ovcArr'
    	));
    }
}
