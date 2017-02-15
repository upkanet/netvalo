<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<br>
		<div class="panel panel-primary">
			<div class="panel-body">
				<canvas id="valoCanvas" width="100%" height="30"></canvas>
				<script type="text/javascript">
					var valoData = {
						labels: [0,1,2,3,4,5,6,7,8,9],
						datasets: {!! $valo->graphDatasets() !!}
					};
				</script>
			</div>
		</div>
	</div>
</div>