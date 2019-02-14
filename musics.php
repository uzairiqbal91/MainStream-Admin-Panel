<!doctype html>
<html lang="en">

<?php include 'header.php'  ?>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include 'topbar.php'  ?>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		
		<?php include 'sidebar.php'  ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title tabheadingdesign">All Musics</h1>
								</div>
								<div class="panel-body panelshadow">
									<table class="table tabelshadow table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Image</th>
												<th>Music Name</th>
												<th>Pulisher Name</th>
												<th>Details</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td><span class="icon "><img class="imgcustom" src="https://images.pexels.com/photos/555790/pexels-photo-555790.png?cs=srgb&dl=black-and-white-boy-casual-555790.jpg&fm=jpg"></span></td>
												<td class="tablecontent">Steve</td>
												<td class="tablecontent">Jobs</td>
												
												<td class="tablecontent"><button type="button" onclick="window.location.href='musicdetail.php'" class="btn btn-primary">
												Details</button></td>
											</tr>
												<td>2</td>
												<td><span class="icon "><img class="imgcustom" src="https://images.pexels.com/photos/555790/pexels-photo-555790.png?cs=srgb&dl=black-and-white-boy-casual-555790.jpg&fm=jpg"></span></td>
												<td class="tablecontent">Steve</td>
												<td class="tablecontent">Jobs</td>
												
												<td class="tablecontent"><button type="button" class="btn btn-primary">Details</button></td>
											</tr>
											<tr>
												<td>3</td>
												<td><span class="icon "><img class="imgcustom" src="https://images.pexels.com/photos/555790/pexels-photo-555790.png?cs=srgb&dl=black-and-white-boy-casual-555790.jpg&fm=jpg"></span></td>
												<td class="tablecontent">Steve</td>
												<td class="tablecontent">Jobs</td>
												
												<td class="tablecontent"><button type="button" class="btn btn-primary">Details</button></td>
											</tr>

											<tr>
												<td>4</td>
												<td><span class="icon "><img class="imgcustom" src="https://images.pexels.com/photos/555790/pexels-photo-555790.png?cs=srgb&dl=black-and-white-boy-casual-555790.jpg&fm=jpg"></span></td>
												<td class="tablecontent">Steve</td>
												<td class="tablecontent">Jobs</td>
												
												<td class="tablecontent"><button type="button" class="btn btn-primary">Details</button></td>
											</tr>

												<tr>
												<td>5</td>
												<td><span class="icon "><img class="imgcustom" src="https://images.pexels.com/photos/555790/pexels-photo-555790.png?cs=srgb&dl=black-and-white-boy-casual-555790.jpg&fm=jpg"></span></td>
												<td class="tablecontent">Steve</td>
												<td class="tablecontent">Jobs</td>
												
												<td class="tablecontent"><button type="button" class="btn btn-primary">Details</button></td>
											</tr>

										





										</tbody>
									</table>
								</div>
							</div>
					<!-- END OVERVIEW -->
					


						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		

		<?php include 'footer.php'  ?>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);
		new Chartist.Bar('#visits-chart1', data, options);
		new Chartist.Bar('#visits-chart2', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});


function openWin() {
  window.open("https://www.w3schools.com");
}
	$(document).ready(function() {
    $("#2").addClass("active");
   

});
	</script>
</body>

</html>
