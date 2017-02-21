<div class="row">
	<div class="col-sm-5">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Bilan Fonctionnel</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.actifeco')
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Matrice BCG</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.bcg')
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Indicateurs</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.3main')
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-7">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Evolution du CA</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.ca3')
			</div>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Rentabilit&eacute;</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.renta')
			</div>
		</div>
	</div>
</div>