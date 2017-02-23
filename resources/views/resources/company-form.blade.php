@extends('layouts.app')

@if(isset($company))
	@section('title',$company->name)
@else
	@section('title','Ajouter une entreprise')
@endif

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{url('/css/welcome.css')}}">
@endsection

@section('js')
@parent
<script type="text/javascript">
	@if(isset($company))
	var deleteCompanyroute = "{{route('companies.destroy',$company)}}";
	var homeRoute = "{{url('home')}}";
	var csrf_token = $('#deleteCompanybtn').data('token');
	@endif
</script>
<script src="{{url('/js/company.js')}}"></script>
@endsection

@section('content')
<div class="container">
	@if(isset($company))
	<form action="{{ route('companies.update',$company) }}" method="POST" role="form" data-toggle="validator">
	<input type="hidden" name="_method" value="PUT">
	@else
	<form action="{{ route('companies.store') }}" method="POST" role="form" data-toggle="validator">
	@endif
	{{ csrf_field() }}
	<input type="hidden" name="user_id" value="{{Auth::id()}}">
	<h2>@if(isset($company)) Modifier {{$company->name}} @else Ajouter une entreprise @endif</h2>
	<div class="row">
			<div class="col-lg-9 col-sm-6">
				<button class="btn btn-primary btn-block btn-lg" type="submit">Envoyer</button>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a class="btn btn-default btn-lg" href="{{url('/home')}}">Retour</a>
				@if(isset($company))
				<a class="btn btn-danger btn-lg" id="deleteCompanybtn" data-token="{{ csrf_token()}}">Supprimer</a>
				@endif
			</div>
		</div>
		<br>
		<div class="row">
			<div class="panel panel-default">
		        <div class="panel-body">
		        	<div class="form-group">
		        		<label for="name">Nom*</label>
		        		<input type="text" class="form-control" name="name" value="{{$company->name or ""}}" placeholder="Nom" required>
		        		<div class="help-block with-errors"></div>
		        	</div>
		        	<div class="form-group">
		        		<label for="siret">SIRET*</label>
		        		<input type="text" pattern="[0-9]{14}" class="form-control" name="siret" value="{{$company->siret or ""}}" placeholder="SIRET" data-error="Veuillez respecter le format requis : 14 chiffres" required>
		        		<div class="help-block with-errors"></div>
		        	</div>
		        	<div class="form-group">
		        		<label for="city">Ville</label>
		        		<input type="text" class="form-control" name="city" value="{{$company->city or ""}}" placeholder="Ville">
		        		<div class="help-block with-errors"></div>
		        	</div>
		        	<div class="form-group">
		        		<label for="zipcode">Code Postal</label>
		        		<input type="text" pattern="[0-9]{5}" class="form-control" name="zipcode" value="{{$company->zipcode or ""}}" data-error="Veuillez respecter le format requis : 5 chiffres" placeholder="59 000">
		        		<div class="help-block with-errors"></div>
		        	</div>
		        </div>
		    </div>
		</div>
    </form>
</div>
@endsection