<div class="row">
	<div class="col-sm-5">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Bilan Fonctionnel</h3>
			</div>
			<div class="panel-body">
				@include('indicators.actifeco')
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
				@include('indicators.bcg')
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
				@include('indicators.3main')
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
				@include('indicators.ca3')
			</div>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Rentabilit&eacute;</h3>
			</div>
			<div class="panel-body">
				@include('indicators.renta')
			</div>
		</div>
	</div>
</div>