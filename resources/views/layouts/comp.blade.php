@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{url('/css/welcome.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/css/company.css')}}">
@endsection

@section('content')
<div class="col-lg-1 col-sm-2" id="companiesList">
	<h4 class="text-center">NetValo</h4>
	<a class="btn btn-primary btn-block btn-sm" href="{{url('/home')}}">
		<span class="glyphicon glyphicon-user" aria-hidden="true"></span><br>Mon<br>Compte
	</a>
	<br>
	@foreach(Auth::user()->companies as $cmp)
		@if($cmp->id == $company->id)
		<a class="btn btn-success btn-block btn-sm companyBtn" href="{{url('/companies/'.$cmp->id)}}">
		@else
		<a class="btn btn-default btn-block btn-sm companyBtn" href="{{url('/companies/'.$cmp->id)}}">
		@endif
			<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><br>{{ $cmp->name }}
		</a>
	@endforeach
	
	<a href="{{route('companies.create')}}" class="btn btn-default btn-block companyBtn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><br>Ajouter</a>
</div>

<div class="col-lg-10 col-sm-8" id="middleView">
@section('middle')
@show
</div>

<div class="col-lg-1 col-sm-2" id="analysisList">
	<h4 class="text-center">Estimer</h4>
	@if(count($company->availableDocsArray()) > 0)
	@foreach($company->availableDocsArray() as $year => $values)
		@if($values['analysis'])
			<a href="{{url('/companies/'.$company->id.'/analysis/'.$year)}}" class="btn btn-default btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> {{$year}}</a>
		@else
			<button class="btn btn-default btn-block disabled">{{$year}}</button>
		@endif
	@endforeach
	@endif
	@if($company->countAvailableAnalysis() == 0)
	<br>
	<div class="alert alert-primary" role="alert">Les analyses seront actives d&egrave;s que vous aurez enregistr&eacute;<br><strong>2 Bilans</strong> et <br><strong>3 Comptes de R&eacute;sultats</strong> cons&eacute;cutifs</div>
	@endif
</div>
@endsection