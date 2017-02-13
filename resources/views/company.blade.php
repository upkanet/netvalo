@extends('layouts.app')

@section('title',$company->name)

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="../css/welcome.css">
<link rel="stylesheet" type="text/css" href="../css/company.css">
@endsection

@section('content')
<div class="container">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="col-sm-12"><h2>{{$company->name}}</h2></div>
		<div class="row">
			<div class="col-sm-4">
			<h4 class="text-center">Bilans</h4>
			</div>
			<div class="col-sm-4 col-sm-offset-4">
			<h4 class="text-center">Comptes de Résultats</h4>
			</div>
		</div>
		@if(count($availableDocsArray) > 0)
		@foreach($availableDocsArray as $year => $values)
			<div class="row">
				<div class="col-sm-4">
				@if($values['bilan'])
					<p class="text-center"><a href="{{$company->id}}/bilan/{{$year}}" class="btn btn-default btn-rnd">B</a></p>
				@else
					<p class="text-center"><a href="#" class="btn btn-primary btn-rnd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
				@endif
				</div>
				<div class="col-sm-4 gradYear">
					<p class="text-center yearList">{{$year}}</p>
				</div>
				<div class="col-sm-4">
				@if($values['cr'])
					<p class="text-center"><a href="{{$company->id}}/cr/{{$year}}" class="btn btn-default btn-rnd">CR</a></p>
				@else
					<p class="text-center"><a href="#" class="btn btn-primary btn-rnd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
				@endif
				</div>
			</div>
		@endforeach
		@endif
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<h3><button class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter Ann&eacute;e</button></h3>
				</div>
			</div>
	</div>
</div>

<div class="col-sm-1" id="companiesList">
	<h3 class="text-center">NetValo</h3>
	@foreach(Auth::user()->companies as $cmp)
		@if($cmp->id == $company->id)
		<a class="btn btn-success btn-block companyBtn" href="../companies/{{$cmp->id}}">
		@else
		<a class="btn btn-default btn-block companyBtn" href="../companies/{{$cmp->id}}">
		@endif
			<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><br>{{ $cmp->name }}
		</a>
	@endforeach
	
	<button class="btn btn-default btn-block companyBtn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><br>Ajouter</button>
</div>

<div class="col-sm-1" id="analysisList">
	<h3 class="text-center">Estimer</h3>
	@if(count($availableDocsArray) > 0)
	@foreach($availableDocsArray as $year => $values)
		@if($values['analysis'])
			<a href="{{$company->id}}/analysis/{{$year}}" class="btn btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> {{$year}}</a>
		@else
			<button class="btn btn-default btn-block disabled">{{$year}}</button>
		@endif
	@endforeach
	@endif
</div>
@endsection