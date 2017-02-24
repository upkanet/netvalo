@extends('layouts.comp')

@section('title',$company->name)

@section('js')
@parent
<script src="{{url('/js/company.js')}}"></script>
@endsection


@section('middle')
<div class="row">
	<h2>{{$company->name}}</h2><input type="hidden" id="companyIdInput" value="{{ $company->id }}">
</div>
@if($company->countAvailableAnalysis() == 0)
<div class="alert alert-info" role="alert">Ajoutez au moins <strong>2 Bilans</strong> et <strong>3 Comptes de R&eacute;sultats</strong> cons&eacute;cutifs pour calculer une premi&egrave;re estimation.<br>
Exemple : Bilan {{date('Y') - 1}}, Bilan {{date('Y') - 2}}, Compte de R&eacute;sultats {{date('Y') - 1}}, Compte de R&eacute;sultats {{date('Y') - 2}} et Compte de R&eacute;sultats {{date('Y') - 3}}</div>
@endif
<div class="row">
	<div class="col-sm-4">
	<h4 class="text-center">Bilans</h4>
	</div>
	<div class="col-sm-4 col-sm-offset-4">
	<h4 class="text-center">Comptes de Résultats</h4>
	</div>
</div>
@if(count($company->availableDocsArray()) > 0)
@foreach($company->availableDocsArray() as $year => $values)
<div class="row">
	<div class="col-sm-4">
	@if($values['bilan'])
		<p class="text-center"><a href="{{$company->id}}/bilan/{{$year}}" class="btn btn-default btn-rnd">B</a></p>
	@else
		<p class="text-center"><a href="../bilans/create?company={{$company->id}}&year={{$year}}" class="btn btn-primary btn-rnd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
	@endif
	</div>
	<div class="col-sm-4 gradYear">
		<p class="text-center yearList">{{$year}}</p>
	</div>
	<div class="col-sm-4">
	@if($values['cr'])
		<p class="text-center"><a href="{{$company->id}}/cr/{{$year}}" class="btn btn-default btn-rnd">CR</a></p>
	@else
		<p class="text-center"><a href="../crs/create?company={{$company->id}}&year={{$year}}" class="btn btn-primary btn-rnd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
	@endif
	</div>
</div>
@endforeach
@endif
<div class="row" id="addYear">
	
</div>
<div class="row collapse" id="selectYear">
	<div class="col-sm-4 col-sm-offset-4">
		<div class="panel panel-primary">
			<div class="panel-body">
				<form class="form-inline">
					<p>S&eacute;lectionnez une ann&eacute;e</p>
					<div class="form-group text-center">
						<select class="form-control input-lg" id="selectYearInput">
							@foreach($possibleNewYears as $y)
								<option>{{ $y }}</option>
							@endforeach
						</select>
						<a class="btn btn-success" onclick="selectYear()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<h3><button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#selectYear"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter Ann&eacute;e</button></h3>
	</div>
</div>
<div class="row" id="addYearRow">
	
</div>
@endsection