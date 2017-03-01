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
			@include('indicators.valo.further')
		</div>
	</div>
</div>

@section('modals')
	@parent
	@component('inc.modal')
		@include('indicators.valo.request_form')
		@slot('modal_title', 'Requ&ecirc;te')
		@slot('modal_id', 'request_modal')
	@endcomponent
@endsection