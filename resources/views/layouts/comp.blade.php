@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{url('/css/welcome.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/css/company.css')}}">
@endsection

@section('content')
<div class="col-sm-10 col-sm-offset-1" id="middleView">
@section('middle')
@show
</div>

<div class="col-sm-1" id="companiesList">
	<h4 class="text-center"><img src="{{url('img/logo.png')}}" width="100%"></h4>
	@foreach(Auth::user()->companies as $cmp)
		@if($cmp->id == $company->id)
		<a class="btn btn-success btn-block btn-sm companyBtn" href="{{url('/companies/'.$cmp->id)}}">
		@else
		<a class="btn btn-default btn-block btn-sm companyBtn" href="{{url('/companies/'.$cmp->id)}}">
		@endif
			<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><br>{{ $cmp->name }}
		</a>
	@endforeach
	
	<button class="btn btn-default btn-block companyBtn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><br>Ajouter</button>
</div>

<div class="col-sm-1" id="analysisList">
	<h4 class="text-center">Estimer</h4>
	@php $oneAnalysis = false; @endphp
	@if(count($company->availableDocsArray()) > 0)
	@foreach($company->availableDocsArray() as $year => $values)
		@if($values['analysis'])
			@php $oneAnalysis = true; @endphp
			<a href="{{url('/companies/'.$company->id.'/analysis/'.$year)}}" class="btn btn-default btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> {{$year}}</a>
		@else
			<button class="btn btn-default btn-block disabled">{{$year}}</button>
		@endif
	@endforeach
	@endif
	@if(!$oneAnalysis)
	<p class="text-center">Aucune analyse disponible.</p><div class="alert alert-info" role="alert">Ajoutez au moins <strong>2 Bilans</strong> et <strong>3 Comptes de R&eacute;sultats</strong> cons&eacute;cutifs pour calculer une premi&egrave;re estimation.</div>
	@endif
</div>
@endsection