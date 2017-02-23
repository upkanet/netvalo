@extends('layouts.comp')

@section('title',$company->name .' - Ajouter un Bilan')

@section('js')
@parent
<script type="text/javascript">
	var ss_tots = {!!json_encode($ss_tots)!!};
	var listSIG = ['actif_imm','actif_circ','actif','capitaux_propres','autres_fds_propres','prov_rc','tot_4','passif'];
</script>
<script src="{{url('/js/liassefisc.js')}}"></script>
@endsection


@section('middle')
<h3>{{$company->name}} - Ajouter le Bilan {{$year}}</h3>
<div class="container">
	@if(isset($bilan))
	<form action="{{ route('bilans.update',$bilan) }}" method="POST" role="form" data-toggle="validator">
	<input type="hidden" name="_method" value="PUT">
	@else
	<form action="{{ route('bilans.store') }}" method="POST" role="form" data-toggle="validator">
	@endif
	{{ csrf_field() }}
	<input type="hidden" name="company_id" value="{{$company->id}}">
	<input type="hidden" name="year" value="{{$year}}">
		<div class="row">
			<div class="col-sm-12">
				<button class="btn btn-primary btn-block btn-lg" type="submit">Envoyer</button>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-primary">
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th colspan="2">Actif</th>
								</tr>
							</thead>
							<tbody>
							@php $i = 0; @endphp
							@foreach($fields_actif as $field_key => $field_name)
								<tr @if($i==0) class="success" @endif>
									<td>{{$field_name}}</td>
									<td>
										@component('inc.currency_input') {{$field_key}}
										@if(isset($bilan)) @slot('old_val', $bilan->$field_key) @endif
										@endcomponent
									</td>
								</tr>
								@if($i==18)
									<tr class="success"><td><strong>Total Actif Immobilis&eacute;</strong></td><td>
										@component('inc.currency_input_readonly') actif_imm
										@if(isset($bilan)) @slot('old_val', $bilan->sig('actif_imm')) @endif
										@endcomponent
									</td></tr>
								@elseif($i==30)
									<tr class="success"><td><strong>Total Actif Circulant</strong></td><td>
										@component('inc.currency_input_readonly') actif_circ
										@if(isset($bilan)) @slot('old_val', $bilan->sig('actif_circ')) @endif
										@endcomponent
									</td></tr>
								@endif
								@php $i++; @endphp
							@endforeach
									<tr class="danger"><td><strong>Total Actif</strong></td><td>
										@component('inc.currency_input_readonly') actif
										@if(isset($bilan)) @slot('old_val', $bilan->sig('actif')) @endif
										@endcomponent
									</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-primary">
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th colspan="2">Passif</th>
								</tr>
							</thead>
							<tbody>
							@php $i = 0; @endphp
							@foreach($fields_passif as $field_key => $field_name)
								<tr>
									<td>{{$field_name}}</td>
									<td>
										@component('inc.currency_input') {{$field_key}}
										@if(isset($bilan)) @slot('old_val', $bilan->$field_key) @endif
										@endcomponent
									</td>
								</tr>
								@if($i==10)
									<tr class="success"><td><strong>Total Capitaux Propres</strong></td><td>
										@component('inc.currency_input_readonly') capitaux_propres
										@if(isset($bilan)) @slot('old_val', $bilan->sig('capitaux_propres')) @endif
										@endcomponent
									</td></tr>
								@elseif($i==12)
									<tr class="success"><td><strong>Autres Fonds Propres</strong></td><td>
										@component('inc.currency_input_readonly') autres_fds_propres
										@if(isset($bilan)) @slot('old_val', $bilan->sig('autres_fds_propres')) @endif
										@endcomponent
									</td></tr>
								@elseif($i==14)
									<tr class="success"><td><strong>Provisions pour Risques et Charges</strong></td><td>
										@component('inc.currency_input_readonly') prov_rc
										@if(isset($bilan)) @slot('old_val', $bilan->sig('prov_rc')) @endif
										@endcomponent
									</td></tr>
								@elseif($i==24)
									<tr class="success"><td><strong>Total (IV)</strong></td><td>
										@component('inc.currency_input_readonly') tot_4
										@if(isset($bilan)) @slot('old_val', $bilan->sig('tot_4')) @endif
										@endcomponent
									</td></tr>
								@endif
								@php $i++; @endphp
							@endforeach
							<tr class="danger"><td><strong>Total Passif</strong></td><td>
										@component('inc.currency_input_readonly') passif
										@if(isset($bilan)) @slot('old_val', $bilan->sig('passif')) @endif
										@endcomponent
									</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection