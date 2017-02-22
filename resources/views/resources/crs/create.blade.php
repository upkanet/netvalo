@extends('layouts.comp')

@section('title',$company->name .' - Ajouter un Bilan')

@section('js')
@parent
<script type="text/javascript">
	var ss_tots = {!!json_encode($ss_tots)!!};
	var listSIG = ['CAnet'];
</script>
<script src="{{url('/js/liassefisc.js')}}"></script>
@endsection


@section('middle')
<h3>{{$company->name}} - Ajouter le CR {{$year}}</h3>
<div class="container">
	<form action="{{ route('bilans.store') }}" method="POST" role="form" data-toggle="validator">
	{{ csrf_field() }}
	<input type="hidden" name="company_id" value="{{$company->id}}">
	<input type="hidden" name="year" value="{{$year}}">
		<div class="row">
			<div class="col-sm-6">
				<button class="btn btn-primary btn-block btn-lg" type="">Envoyer</button>
				<br>
			</div>
			<div class="col-sm-6">
				<button class="btn btn-danger btn-block btn-lg">Retour</button>
				<br>
			</div>
		</div>
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
										@endcomponent
									</td>
								</tr>
								@if($i==2)
									<tr class="success">
										<td>Chiffre d'affaires net</td>
										<td>
											@component('inc.currency_input_readonly') CAnet
											@endcomponent
										</td>
									</tr>
								@elseif($i==7)
									<tr class="success">
										<td>Total produits d'exploitation</td>
										<td>
											@component('inc.currency_input_readonly') prod_exploit
											@endcomponent
										</td>
									</tr>
								@elseif($i==20)
									<tr class="success">
										<td>Total charges d'exploitation</td>
										<td>
											@component('inc.currency_input_readonly') charges_exploit
											@endcomponent
										</td>
									</tr>
									<tr class="success">
										<td>R&eacute;sultat d'exploitation</td>
										<td>
											@component('inc.currency_input_readonly') rex
											@endcomponent
										</td>
									</tr>
								@elseif($i==28)
									<tr class="success">
										<td>Total produits financiers</td>
										<td>
											@component('inc.currency_input_readonly') prod_fi
											@endcomponent
										</td>
									</tr>
								@elseif($i==32)
									<tr class="success">
										<td>Total charges financi&egrave;res</td>
										<td>
											@component('inc.currency_input_readonly') charges_exploit
											@endcomponent
										</td>
									</tr>
									<tr class="success">
										<td>R&eacute;sultat financier</td>
										<td>
											@component('inc.currency_input_readonly') rfi
											@endcomponent
										</td>
									</tr>
									<tr class="success">
										<td>R&eacute;sultat Courant Avant Imp&ocirc;ts</td>
										<td>
											@component('inc.currency_input_readonly') rcai
											@endcomponent
										</td>
									</tr>
								@elseif($i==31)
									<tr class="success">
										<td>Total produits exceptionnels</td>
										<td>
											@component('inc.currency_input_readonly') prod_excep
											@endcomponent
										</td>
									</tr>
								@elseif($i==34)
									<tr class="success">
										<td>Total charges exceptionnelles</td>
										<td>0</td>
									</tr>
									<tr class="success">
										<td>R&eacute;sultat exceptionnel</td>
										<td>
											@component('inc.currency_input_readonly') charges_excep
											@endcomponent
										</td>
									</tr>
								@endif
								@php $i++; @endphp
								@endforeach
								<tr>
									<td>Total produits</td>
									<td>
										@component('inc.currency_input_readonly') prod
										@endcomponent
									</td>
								</tr>
								<tr>
									<td>Total charges</td>
									<td>
										@component('inc.currency_input_readonly') charges
										@endcomponent
									</td>
								</tr>
								<tr>
									<td>B&eacute;n&eacute;fice ou perte</td>
									<td>0</td>
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