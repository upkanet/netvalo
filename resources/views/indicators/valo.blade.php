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
	            <li><span class="glyphicon glyphicon-briefcase"></span> Strat&eacute;gie
	            	<ul>
	            		<li><a href="#">&Ecirc;tre conseillé pour g&eacute;rer cette entreprise et am&eacute;liorer sa valeur</a></li>
	            	</ul>
	            </li>
	            <li><span class="glyphicon glyphicon-euro"></span> Cession-Acquisition
	            	<ul>
	            		<li><a href="#">Trouver un conseiller pour Vendre cette entreprise</a></li>
	            		<li><a href="#">Trouver un conseiller pour Acheter cette entreprise</a></li>
	            	</ul>
	            </li>
				<li><span class="glyphicon glyphicon-signal"></span> Valorisation
					<ul>
						<li><a href="#">Obtenir la valorisation détaill&eacute;e reprenant les 8 m&eacute;thodes</a> (90&euro; HT)</li>
						<li><a href="#">Obtenir une analyse financière personnalisée sur la base de la valorisation détaill&eacute;e</a> (190&euro; HT)</li>
					</ul>
				</li>
	         </ul>
	         <hr>
	         <p class="text-center">Pour toute autre demande :
	         	<button class="btn btn-default">Nous contacter</button>
	         </p>
		</div>
	</div>
</div>

@section('modals')
	@parent
	
@endsection