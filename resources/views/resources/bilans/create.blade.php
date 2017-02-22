@extends('layouts.comp')

@section('title',$company->name .' - Ajouter un Bilan')

@section('js')
@parent
<script type="text/javascript">
	var ss_tots = {!!json_encode($ss_tots)!!};
</script>
<script src="{{url('/js/liassefisc.js')}}"></script>
@endsection


@section('middle')
<h3>{{$company->name}} - Ajouter le Bilan {{$year}}</h3>
<div class="container">
	<form action="{{ route('bilans.store') }}" method="POST" role="form" data-toggle="validator">
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
										<div class="input-group">
											<input type="number" class="form-control input-sm input-bilan" name="{{$field_key}}" placeholder="0">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td>
								</tr>
								@if($i==18)
									<tr class="success"><td><strong>Total Actif Immobilis&eacute;</strong></td><td>
										<div class="input-group">
											<input type="number" class="form-control input-sm" id="actif_imm" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td></tr>
								@elseif($i==30)
									<tr class="success"><td><strong>Total Actif Circulant</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="actif_circ" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td></tr>
								@endif
								@php $i++; @endphp
							@endforeach
									<tr class="danger"><td><strong>Total Actif</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="actif" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
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
										<div class="input-group">
											<input type="number" class="form-control input-sm input-bilan" name="{{$field_key}}" placeholder="0">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td>
								</tr>
								@if($i==10)
									<tr class="success"><td><strong>Total Capitaux Propres</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="capitaux_propres" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td></tr>
								@elseif($i==12)
									<tr class="success"><td><strong>Autres Fonds Propres</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="autres_fds_propres" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td></tr>
								@elseif($i==14)
									<tr class="success"><td><strong>Provisions pour Risques et Charges</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="prov_rc" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td></tr>
								@elseif($i==24)
									<tr class="success"><td><strong>Total (IV)</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="tot_4" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
									</td></tr>
								@endif
								@php $i++; @endphp
							@endforeach
							<tr class="danger"><td><strong>Total Passif</strong></td><td>
										<div class="input-group">
											<input type="text" class="form-control input-sm" id="passif" placeholder="0" readonly="true">
											<div class="input-group-addon input-sm">&euro;</div>
										</div>
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