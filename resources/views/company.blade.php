@extends('layouts.comp')

@section('title',$company->name)

@section('middle')
<div class="container">
	<div class="col-sm-12"><h2>{{$company->name}}</h2></div>
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
@endsection