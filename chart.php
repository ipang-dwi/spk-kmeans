<!doctype html>
<html>

<head>
	<title>Clustering dengan KMeans Chart</title>
	<script src="Chart.bundle.js"></script>
	<script src="utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<body>
	<div style="width:75%">
		<canvas id="canvas"></canvas>
	</div>
	<!--button id="randomizeData">Randomize Data</button-->
	<script>
		var color = Chart.helpers.color;
		var scatterChartData = {
			datasets: [{
				label: 'Cluster 1',
				borderColor: window.chartColors.red,
				backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
				data: [{
					x: 3,
					y: 4,
				}, {
					x: 4,
					y: 7,
				}, {
					x: 2,
					y: 6,
				}, {
					x: 5,
					y: 3,
				}, {
					x: 1,
					y: 7,
				}, {
					x: 4,
					y: 10,
				}, {
					x: 6,
					y: 8,
				}, {
					x: 3,
					y: 11,
				}]
			}, {
				label: 'Cluster 2',
				borderColor: window.chartColors.blue,
				backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
				data: [{
					x: 12,
					y: 10,
				}, {
					x: 8,
					y: 11,
				}, {
					x: 9,
					y: 13,
				}, {
					x: 10,
					y: 12,
				}]
			}]
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myScatter = Chart.Scatter(ctx, {
				data: scatterChartData,
				options: {
					title: {
						display: false,
						text: 'Chart.js Scatter Chart'
					},
				}
				
			});
		};

		/*document.getElementById('randomizeData').addEventListener('click', function() {
			scatterChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return {
						x: randomScalingFactor(),
						y: randomScalingFactor()
					};
				});
			});
			window.myScatter.update();
		});*/
	</script>
</body>
</html>
