<script type="text/javascript">
		$('#periode_GA').daterangepicker(
		{
		ranges: {
		  'Today': [moment(), moment()],
		  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
		  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		  'This Month': [moment().startOf('month'), moment().endOf('month')],
		  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		startDate: moment().subtract(29, 'days'),
		endDate: moment()
		},
		function (start, end) {

		$('#periode_GA span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

		var urlPeriod =  "{{ route('analytics.getGA') }}/" + start.format('MMMM D, YYYY') + "/" + end.format('MMMM D, YYYY');

		$.getJSON(urlPeriod, function (json) {

		    // for MostVisitedPages
			    var captionVarMVP = new Array();
			    json.MostVisitedPages.map(function(item) {
			        if (item.url.indexOf("/berjuice/public/") < 0){
				      captionVarMVP.push(item.pageTitle + ' : ' + item.url);
				    }
			    });

			    var captionValMVP = new Array();
			    json.MostVisitedPages.map(function(item) {
			        if (item.url.indexOf("/berjuice/public/") < 0){
				      captionValMVP.push(item.pageViews);
			      	}
			    });

			    $('#chartMostVisitedPages').replaceWith('<canvas id="chartMostVisitedPages"></canvas>');

			    var cMVP = document.getElementById("chartMostVisitedPages");
			    var barChartMostVisitedPages = new Chart(cMVP, {
			        type: 'horizontalBar',
			        data: {
			          labels: captionVarMVP,
			          datasets: [
			              {
			                label: "Visited Pages",
			                data: eval(captionValMVP),
			                backgroundColor : "rgba(255,0,0,.5)"
			              }
			            ]
			        }
			    });
		    // end for MostVisitedPages

		    // for TopBrowsers
			    var captionVarTB = new Array();
			    json.TopBrowsers.map(function(item) {
			      captionVarTB.push(item.browser);
			    });

			    var captionValTB = new Array();
			    json.TopBrowsers.map(function(item) {
			      captionValTB.push(item.sessions);
			    });

			    $('#chartTopBrowsers').replaceWith('<canvas id="chartTopBrowsers"></canvas>');

			    var cTB = document.getElementById("chartTopBrowsers");
			    var barChartTopBrowsers = new Chart(cTB, {
			        type: 'horizontalBar',
			        data: {
			          labels: captionVarTB,
			          datasets: [
			              {
			                label: "Top Browsers",
			                data: eval(captionValTB),
			                backgroundColor : "rgba(255,0,0,.5)"
			              }
			            ]
			        }
			    });
		    // end for TopBrowsers

		    // for CityVisited
			    var captionVarCV = new Array();
			    var captionValCV = new Array();
			    var intConfert = 1;
			    $.each(json.CityVisited, function () {
			      $.each(this, function (name, value) {
			        if (intConfert%2 != 0) {
			          captionVarCV.push(value);
			        }
			        if (intConfert%2 == 0) {
			          if (value > 40) {
			            captionValCV.push(value);
			          }
			          else if(value < 40){
			            captionVarCV.splice(-1,1);
			          }
			        }
			        intConfert = intConfert + 1;
			      });
			    });

			    $('#chartCityVisited').replaceWith('<canvas id="chartCityVisited"></canvas>');

			    var cCV = document.getElementById("chartCityVisited");
			    var barChartCityVisited = new Chart(cCV, {
			        type: 'bar',
			        data: {
			          labels: captionVarCV,
			          datasets: [
			              {
			                label: "City Visited",
			                data: eval(captionValCV),
			                backgroundColor : "rgba(255,0,0,.5)"
			              }
			            ]
			        }
			    });
		    // end for CityVisited

		    // for userVisited
			    var captionVarUV = new Array();
			    var captionValUVF = new Array();
			    var captionValUVM = new Array();
			    var safeGender = "";
			    var intConfert = 1;
			    $.each(json.userVisited, function () {
			      $.each(this, function (name, value) {
			        if (intConfert%2 == 0) {
			          if ( $.inArray( value, captionVarUV ) > -1 ){
			            // this value alredy in array
			          }
			          else{
			            captionVarUV.push(value);
			          }
			        }
			        if (intConfert%3 == 0) {
			          if (safeGender == "female") {
			            captionValUVF.push(value);
			          }
			          if (safeGender == "male") {
			            captionValUVM.push(value);
			          }
			        }
			        if (intConfert%2 != 0) {
			          safeGender = value;
			        }
			        intConfert = intConfert + 1;
			      });
			      intConfert = 1;
			    });

			    $('#chartUserVisited').replaceWith('<canvas id="chartUserVisited"></canvas>');

			    var cUV = document.getElementById("chartUserVisited");
			    var barChartUserVisited = new Chart(cUV, {
			        type: 'bar',
			        data: {
			          labels: captionVarUV,
			          datasets: [
			              {
			                label: "Female",
			                data: eval(captionValUVF),
			                backgroundColor : "rgba(255,0,0,.5)"
			              },
			              {
			                label: "Male",
			                data: eval(captionValUVM),
			                backgroundColor : "rgba(0,0,255,.5)"
			              }
			            ]
			        }
			    });
		    // end for userVisited

		    // for VisitorWebsite
			    var captionVarVW = new Array();
			    var captionValVW = new Array();
			    var intConfert = 1;
			    $.each(json.VisitorWebsite, function () {
			      $.each(this, function (name, value) {
			        if (intConfert%2 != 0) {
			          captionVarVW.push(parse(value));
			        }
			        if (intConfert%2 == 0) {
			          captionValVW.push(value);
			        }
			        intConfert = intConfert + 1;
			      });
			    });

			    $('#chartVisitorWebsite').replaceWith('<canvas id="chartVisitorWebsite"></canvas>');

			    var cVW = document.getElementById("chartVisitorWebsite");
			    var lineChartVisitorWebsite = new Chart(cVW, {
			        type: 'line',
			        data: {
			          labels: captionVarVW,
			          datasets: [
			              {
			                label: "Visitor Website",
			                data: eval(captionValVW),
			                backgroundColor : "rgba(255,0,0,.5)"
			              }
			            ]
			        }
			    });
		    // end for VisitorWebsite

		    // bounce rate
			    var echoBounceRate = "";
			    var echoAvgSessionDuration = "";
			    $.each(json.bounceRate, function () {
			      $.each(this, function (name, value) {
			        echoBounceRate = Math.ceil(value) + '%';
			      });
			    });
		        $("#wrapper-bounceRate").text(echoBounceRate);
		    // bounce rate

		    // avgSessionDuration
			    $.each(json.avgSessionDuration, function () {
			      $.each(this, function (name, value) {
			        echoAvgSessionDuration = value.toHHMMSS();
			      });
			    });
		        $("#wrapper-avgSessionDuration").text(echoAvgSessionDuration);
		    // avgSessionDuration

		});
		});
</script>