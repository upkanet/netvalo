@extends('layouts.comp')

@section('title',$company->name)

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{url('/css/indicators.css')}}">
@endsection

@section('js')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="{{url('/js/analysis.js')}}"></script>
@endsection

@section('middle')
<div class="container-fluid">
	<div class="row"><h2>{{$company->name}}</h2></div>
	<div class="row">
		<ul class="nav nav-pills">
			<li role="presentation"><a data-toggle="pill" href="#indic-valo">Valorisation</a></li>
			<li role="presentation"><a data-toggle="pill" href="#indic-croiss_rent">Croissance Rentable ?</a></li>
			<li role="presentation"><a data-toggle="pill" href="#indic-croiss_autof">Croissance Autofinanc&eacute;e ?</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div id="indic-load" class="tab-pane fade in active">@include('indicators.loading')</div>
		<div id="indic-valo" class="tab-pane fade">@include('indicators.valo')</div>
		<div id="indic-croiss_rent" class="tab-pane fade">@include('indicators.croiss_rent')</div>
		<div id="indic-croiss_autof" class="tab-pane fade">@include('indicators.croiss_autof')</div>
	</div>
</div>
@endsection