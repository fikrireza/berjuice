<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DateTime;
use Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{


    public function index()
    {
        return view('backend.dashboard.index');
    }

    public function getGA(){

      $MostVisitedPages   = Analytics::fetchMostVisitedPages(Period::days(30));
      $TopBrowsers        = Analytics::fetchTopBrowsers(Period::days(30));
      $CityVisited        = Analytics::performQuery(Period::days(30), "ga:users", array("dimensions" => "ga:city"))->rows;
      $userVisited        = Analytics::performQuery(Period::days(30), "ga:users", array("dimensions" => "ga:userGender,ga:userAgeBracket"))->rows;
      $VisitorWebsite     = Analytics::performQuery(Period::days(30), "ga:users", array("dimensions" => "ga:date"))->rows;
      
      $bounceRate         = Analytics::performQuery(Period::days(30), "ga:bounceRate")->rows;
      $avgSessionDuration = Analytics::performQuery(Period::days(30), "ga:avgSessionDuration")->rows;

      return response()->json(
        compact(
          "MostVisitedPages",
          "TopBrowsers",
          "CityVisited",
          "userVisited",
          "VisitorWebsite",
          "bounceRate",
          "avgSessionDuration"
        )
      );
    }

    public function getGAP($start, $end) {

    $startDate  = new DateTime($start." 00:00:00");
    $endDate  = new DateTime($end." 00:00:00");

        $MostVisitedPages = Analytics::fetchMostVisitedPages(Period::create($startDate, $endDate));
        $TopBrowsers = Analytics::fetchTopBrowsers(Period::create($startDate, $endDate));
        $CityVisited = Analytics::performQuery(Period::create($startDate, $endDate), "ga:users", array("dimensions" => "ga:city"))->rows;
        $bounceRate = Analytics::performQuery(Period::create($startDate, $endDate), "ga:bounceRate")->rows;
        $avgSessionDuration = Analytics::performQuery(Period::create($startDate, $endDate), "ga:avgSessionDuration")->rows;
        $VisitorWebsite = Analytics::performQuery(Period::create($startDate, $endDate), "ga:users", array("dimensions" => "ga:date"))->rows;
        $userVisited = Analytics::performQuery(Period::create($startDate, $endDate), "ga:users", array("dimensions" => "ga:userGender,ga:userAgeBracket"))->rows;

        return response()->json(
        compact(
          "MostVisitedPages",
          "TopBrowsers",
          "CityVisited",
          "userVisited",
          "VisitorWebsite",
          "bounceRate",
          "avgSessionDuration"
        )
      );
    }
}
