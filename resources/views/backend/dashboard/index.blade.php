@extends('backend.layout.master')

@section('title')
<title>Home</title>
@endsection

@section('headscript')
	<link href="{{ asset('backend/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
	
@endsection

@section('content')
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">Dashboard</div>

	            <div class="panel-body">
	                You are logged in!
	            </div>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Google <small>Website Analytics</small></h3>
				</div>
	            <div class="panel-body">
		            
		            <div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Bounce Rate</h3>
							</div>
				            <div class="panel-body">
						        <div id="wrapper-bounceRate"></div>
				            </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Avg. Session Duration</h3>
							</div>
				            <div class="panel-body">
						        <div id="wrapper-avgSessionDuration"></div>
				            </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Periode</h3>
							</div>
				            <div class="panel-body">
						        <button type="button" class="btn btn-default pull-right" id="periode_GA">
						          <span>
						            <i class="fa fa-calendar"></i> Select Date Range
						          </span>
						          <i class="fa fa-caret-down"></i>
						        </button>
				            </div>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Most Visited Pages</h3>
							</div>
				            <div class="panel-body">
						        <canvas id="chartMostVisitedPages"></canvas>
				            </div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Visitor Website</h3>
							</div>
				            <div class="panel-body">
						        <canvas id="chartVisitorWebsite"></canvas>
				            </div>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>User Visited</h3>
							</div>
				            <div class="panel-body">
						        <canvas id="chartUserVisited"></canvas>
				            </div>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>City Visited</h3>
							</div>
				            <div class="panel-body">
						        <canvas id="chartCityVisited"></canvas>
				            </div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>Top Browsers</h3>
							</div>
				            <div class="panel-body">
						        <canvas id="chartTopBrowsers"></canvas>
				            </div>
						</div>
					</div>

	            </div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script src="{{ asset('backend/plugins/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('backend/plugins/Chart.js/dist/Chart.min.js')}}"></script>

	@include('backend.dashboard.include-js')
	@include('backend.dashboard.include-js-callback')
@endsection