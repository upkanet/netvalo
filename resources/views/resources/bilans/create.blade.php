@extends('layouts.comp')

@section('title',$company->name .' - Ajouter un Bilan')


@section('middle')
<h3>{{$company->name}} - Ajouter le Bilan {{$year}}</h3>
<div class="container">
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
						<tr>
							<td>{{$field_name}}</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control input-sm" name="{{$field_key}}" placeholder="0">
									<div class="input-group-addon input-sm">&euro;</div>
								</div>
							</td>
						</tr>
						@if($i==18)
							<tr class="success"><td><strong>Total Actif Immobilis&eacute;</strong></td><td>tot_actif_imm</td></tr>
						@elseif($i==30)
							<tr class="success"><td><strong>Total Actif Circulant</strong></td><td>tot_actif_circ</td></tr>
						@endif
						@php $i++; @endphp
					@endforeach
							<tr class="success"><td><strong>Total Actif</strong></td><td>tot_actif</td></tr>
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
					@foreach($fields_passif as $field_key => $field_name)
						<tr>
							<td>{{$field_name}}</td>
							<td>{{$field_key}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection