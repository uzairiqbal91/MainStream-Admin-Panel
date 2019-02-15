<?php include 'seviceLink.php'  ?>
<?php
   
    $curl = curl_init();

    curl_setopt_array($curl, array(
     	CURLOPT_URL => "https://purpledimes.com/Diftech/webservices/get_all_task_procedures.php?task_id=".$_REQUEST['id'],

     // CURLOPT_URL => $service."get_all_task_procedures.php?task_id=".$REQUEST['id'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
      "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $response = json_decode($response, true);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
        <link rel="stylesheet" href="css/normalize.css">
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato:400'>
        <link rel='stylesheet prefetch' href='css/waves.min.css'>
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/style.css">
  </head>

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
									<h1 class="panel-title tabheadingdesign">Music Detail</h1>
								</div>
								<!-- <div class="panel-body ">

									
									<h3 class=" tabheadingdesignchild"><?php 
												
													echo  $response[1]['procedures_name'] ; 
						  
						
						
												?></h1>
									<h3 class=" tabheadingdesignchild">Publisher Name</h1> -->

	
	  <div class="player">
		
		<div class="mask"></div>
		<ul class="player-info info-one">
		  <li>Memories (royalty free)</li>
		  <li>Bensound.com</li>
		  <li>3.50</li>
		</ul>
		<ul class="player-info info-two">
		  <li>Memories (royalty free)</li>
		  <li>Bensound.com</li>
		  <li><span id="duration"></span><i> / </i>3.50</li>
		</ul>
		<div id="play-button" class="unchecked">
		  <i class="icon icon-play"></i>
		</div>
		<div class="control-row">
		  <div class="waves-animation-one"></div>
		  <div class="waves-animation-two"></div>
		  <div id="pause-button">
			<i class="icon"></i>
		  </div>
		  <div class="seek-field">
			<input id="audioSeekBar" min="0" max="334" step="1" value="0" type="range" oninput="audioSeekBar()" onchange="this.oninput()">
		  </div>
		  <div class="volume-icon">
			<i class="icon-volume-up"></i>
		  </div>
		  <div class="volume-field">
			<input type="range" min="0" max="100" value="100" step="1" oninput="audio.volume = this.value/100" onchange="this.oninput()">
		  </div>
		</div>
	  </div>

	<audio id="audio-player" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" preload="auto" loop>
	  <source src="audio/bensound-memories.ogg" type="audio/ogg">
	  <source src="audio/bensound-memories.mp3" type="audio/mpeg">
	</audio>
		<script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
		<script src='js/waves.min.js'></script>
		<script src="js/index.js"></script>    


								<div class="panel-body panelshadow">
									<table class="table tabelshadow table-striped">
										<thead>
											<tr>
												
												<th>Purchased</th>
												<th>Playlist</th>
												<th>Faviroutes</th>
												<th>Likes</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td>4</td>
												<td>9</td>
												<td>15</td>
												<td>51</td>
										

										





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
