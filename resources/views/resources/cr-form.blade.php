@extends('layouts.comp')

@section('title',$company->name .' - Ajouter un CR')

@section('js')
@parent
<script type="text/javascript">
	var ss_tots = {!!json_encode($ss_tots)!!};
	var listSIG = ['CAnet','prod_exploit','charges_exploit','prod_fi','charges_fi','prod_excep','charges_excep','prod','charges'];
	@if(isset($cr))
	var deleteBilanCRroute = "{{route('crs.destroy',$cr)}}";
	var companyRoute = "{{route('companies.show',$company)}}";
	var csrf_token = $('#deleteBilanCRbtn').data('token');
	@endif
</script>
<script src="{{url('/js/liassefisc.js')}}"></script>
@endsection


@section('middle')
<h3>{{$company->name}} - @if(isset($cr)) Modifier @else Ajouter @endif le Compte de R&eacute;sultats {{$year}}</h3>
<div class="container">
	@if(isset($cr))
	<form action="{{ route('crs.update',$cr) }}" method="POST" role="form" data-toggle="validator">
	<input type="hidden" name="_method" value="PUT">
	@else
	<form action="{{ route('crs.store') }}" method="POST" role="form" data-toggle="validator">
	@endif
	{{ csrf_field() }}
	<input type="hidden" name="company_id" value="{{$company->id}}">
	<input type="hidden" name="year" value="{{$year}}">
		<div class="row">
			<div class="col-sm-9">
				<button class="btn btn-primary btn-block btn-lg">Envoyer</button>
			</div>
			<div class="col-sm-3">
				<a class="btn btn-default btn-lg" href="{{route('companies.show',$company)}}">Retour</a>
				@if(isset($cr))
				<a class="btn btn-danger btn-lg" id="deleteBilanCRbtn" data-token="{{ csrf_token()}}">Supprimer</a>
				@endif
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-primary">
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th colspan="2">Compte de R&eacute;sultat</th>
								</tr>
							</thead>
							<tbody>
								@php $i = 0; @endphp
								@foreach($fields as $field_key => $field_name)
								<tr>
									<td>{{$field_name}}</td>
									<td>
										@component('inc.currency_input') {{$field_key}}
										@if(isset($cr)) @slot('old_val', $cr->$field_key) @endif
										@endcomponent
									</td>
								</tr>
								@if($i==2)
									<tr class="danger">
										<td><strong>Chiffre d'affaires net</strong></td>
										<td>
											@component('inc.currency_input_readonly') CAnet
											@if(isset($cr)) @slot('old_val', $cr->sig('CAnet')) @endif
											@endcomponent
										</td>
									</tr>
								@elseif($i==7)
									<tr class="success">
										<td><strong>Total produits d'exploitation</strong></td>
										<td>
											@component('inc.currency_input_readonly') prod_exploit
											@if(isset($cr)) @slot('old_val', $cr->sig('prod_exploit')) @endif
											@endcomponent
										</td>
									</tr>
								@elseif($i==20)
									<tr class="success">
										<td><strong>Total charges d'exploitation</strong></td>
										<td>
											@component('inc.currency_input_readonly') charges_exploit
											@if(isset($cr)) @slot('old_val', $cr->sig('charges_exploit')) @endif
											@endcomponent
										</td>
									</tr>
									<tr class="danger">
										<td><strong>R&eacute;sultat d'exploitation</strong></td>
										<td>
											@component('inc.currency_input_readonly') rex
											@if(isset($cr)) @slot('old_val', $cr->Rex) @endif
											@endcomponent
										</td>
									</tr>
								@elseif($i==28)
									<tr class="success">
										<td><strong>Total produits financiers</strong></td>
										<td>
											@component('inc.currency_input_readonly') prod_fi
											@if(isset($cr)) @slot('old_val', $cr->sig('prod_fi')) @endif
											@endcomponent
										</td>
									</tr>
								@elseif($i==32)
									<tr class="success">
										<td><strong>Total charges financi&egrave;res</strong></td>
										<td>
											@component('inc.currency_input_readonly') charges_fi
											@if(isset($cr)) @slot('old_val', $cr->sig('charges_fi')) @endif
											@endcomponent
										</td>
									</tr>
									<tr class="danger">
										<td><strong>R&eacute;sultat financier</strong></td>
										<td>
											@component('inc.currency_input_readonly') rfi
											@if(isset($cr)) @slot('old_val', $cr->Rfi) @endif
											@endcomponent
										</td>
									</tr>
									<tr class="danger">
										<td><strong>R&eacute;sultat Courant Avant Imp&ocirc;ts</strong></td>
										<td>
											@component('inc.currency_input_readonly') rcai
											@if(isset($cr)) @slot('old_val', $cr->RCAI) @endif
											@endcomponent
										</td>
									</tr>
								@elseif($i==35)
									<tr class="success">
										<td><strong>Total produits exceptionnels</strong></td>
										<td>
											@component('inc.currency_input_readonly') prod_excep
											@if(isset($cr)) @slot('old_val', $cr->sig('prod_excep')) @endif
											@endcomponent
										</td>
									</tr>
								@elseif($i==38)
									<tr class="success">
										<td><strong>Total charges exceptionnelles</strong></td>
										<td>
											@component('inc.currency_input_readonly') charges_excep
											@if(isset($cr)) @slot('old_val', $cr->sig('charges_excep')) @endif
											@endcomponent
										</td>
									</tr>
									<tr class="danger">
										<td><strong>R&eacute;sultat exceptionnel</strong></td>
										<td>
											@component('inc.currency_input_readonly') rexcep
											@if(isset($cr)) @slot('old_val', $cr->Rexcep) @endif
											@endcomponent
										</td>
									</tr>
								@endif
								@php $i++; @endphp
								@endforeach
								<tr class="success">
									<td><strong>Total produits</strong></td>
									<td>
										@component('inc.currency_input_readonly') prod
										@if(isset($cr)) @slot('old_val', $cr->sig('prod')) @endif
										@endcomponent
									</td>
								</tr>
								<tr class="success">
									<td><strong>Total charges</strong></td>
									<td>
										@component('inc.currency_input_readonly') charges
										@if(isset($cr)) @slot('old_val', $cr->sig('charges')) @endif
										@endcomponent
									</td>
								</tr>
								<tr class="danger">
									<td><strong>B&eacute;n&eacute;fice ou perte</strong></td>
									<td>
										@component('inc.currency_input_readonly') rn
										@if(isset($cr)) @slot('old_val', $cr->RN) @endif
										@endcomponent
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection