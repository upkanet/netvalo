<div class="row">
	<div class="col-sm-5">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Bilan Fonctionnel</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_autof.actifeco')
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Evolution du Bilan</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_autof.evoae')
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Evolution du BFR</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_autof.evobfr')
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">D&eacute;tails de l'&eacute;volution</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_autof.detailsevobfr')
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">D&eacute;tails du dernier BFR</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_autof.detailsbfr')
			</div>
		</div>
	</div>
</div>