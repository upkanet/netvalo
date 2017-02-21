<canvas id="evoBFRCanvas" width="100%" height="30"></canvas>
<script type="text/javascript">
	var evoBFRData = {
		labels: [{{ array_keys($indic->evoBFR())[1] }},{{ array_keys($indic->evoBFR())[0] }}],
		datasets: [{
			backgroundColor: "rgba(33,150,243,0.8)",
			data: [{{ array_values($indic->evoBFR())[1] }},{{ array_values($indic->evoBFR())[0] }}]
		}]
	};
</script>