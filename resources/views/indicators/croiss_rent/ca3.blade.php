<canvas id="CA3ChartCanvas" width="100%" height="30"></canvas>
<script type="text/javascript">
	var CA3Data = {
		labels: [{{ array_keys($indic->CA3())[2] }},{{ array_keys($indic->CA3())[1] }},{{ array_keys($indic->CA3())[0] }}],
		datasets: [{
			backgroundColor: "rgba(33,150,243,0.8)",
			data: [{{ array_values($indic->CA3())[2] }},{{ array_values($indic->CA3())[1] }},{{ array_values($indic->CA3())[0] }}]
		}]
	};
</script>