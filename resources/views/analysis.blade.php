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
	<div class="row" id="navIndic">
		<ul class="nav nav-tabs nav-justified">
			<li role="presentation" class="active"><a href="#">Rentabilit&eacute;</a></li>
			<li role="presentation"><a href="#">Autofinancement</a></li>
			<li role="presentation"><a href="#">Valorisation</a></li>
		</ul>
	</div>
	<div class="container-fluid" id="contentIndic">
		<div class="row">
			<div class="col-sm-6">
				<br>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Bilan Fonctionnel</h3>
					</div>
					<div class="panel-body">
						@include('indicators.actifeco')
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<br>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Matrice BCG</h3>
					</div>
					<div class="panel-body">
						@include('indicators.bcg')
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<br>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Evolution du CA</h3>
					</div>
					<div class="panel-body">
						@include('indicators.ca3')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection