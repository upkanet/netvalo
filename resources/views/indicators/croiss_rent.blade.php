<br>
<div class="row">
	<div class="col-lg-3 col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Indicateurs</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.3main')
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Matrice BCG</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.bcg')
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-5 col-sm-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Evolution du CA</h3>
			</div>
			<div class="panel-body">
				@include('indicators.croiss_rent.ca3')
			</div>
		</div>
	</div>
	<div class="col-lg-5 col-lg-offset-1 col-sm-6">
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