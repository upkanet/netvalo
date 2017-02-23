<div class="col-sm-6">
	<br>
	<div class="panel panel-primary">
		<div class="panel-body">
			<p>R&eacute;partition des r&eacute;sultats des {{count($valo->list())}} m&eacute;thodes d'estimation</p>
			<canvas id="valoCanvas" width="100%" height="30"></canvas>
			<script type="text/javascript">
				var fourchLow = '{{ million($valo->fourchette()['low']) }}';
				var fourchHigh = '{{ million($valo->fourchette()['high']) }}';
				var valoData = {
					labels: [fourchLow,'','','','','','','','',fourchHigh],
					datasets: {!! $valo->graphDatasets() !!}
				};
			</script>
			<h3 class="text-center">{{ million($valo->fourchette()['low']) }} M&euro; <span class="glyphicon glyphicon-arrow-right"></span> {{ million($valo->fourchette()['high']) }} M&euro;</h3>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<br>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Allez plus loin ...</h3>
		</div>
		<div class="panel-body">
			<ul id="services_list">
	            <li><a href="#">&Ecirc;tre conseillé pour g&eacute;rer cette entreprise</a></li>
	            <li><a href="#">Trouver un conseiller pour Vendre cette entreprise</a> (gratuit)</li>
	            <li><a href="#">Trouver un conseiller pour Acheter cette entreprise</a> (gratuit)</li>
				<li><a href="#">Obtenir la valorisation détaill&eacute;e</a> (500&euro; HT)</li>
	         </ul>
		</div>
	</div>
</div>