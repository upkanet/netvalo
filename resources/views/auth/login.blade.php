@extends('layouts.app')

@section('title','Se connecter')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="css/welcome.css">
@endsection

@section('content')
<div class="container" id="mainContainer">
    <div class="page-header">
        <h1>NetValo</h1>
        <h4>Estimez gratuitement la valeur de votre entreprise</h4>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="well bs-component">
            	<form class="form-horizontal" action="{{ route('login') }}" method="post" role="form" data-toggle="validator">
            		{{ csrf_field() }}
            		<fieldset>
            			<legend>Connexion</legend>
            			@if (count($errors))
            				<div class="alert alert-danger" role="alert">
            					@foreach($errors->all() as $error)	
            						{{ $error }} <br>
            					@endforeach
            				</div>
        				@endif
            			<div class="form-group">
            				<label for="inputLoginEmail" class="col-lg-3 control-label">Email</label>
            				<div class="col-lg-9">
            					<input name="email" type="email" class="form-control" id="inputLoginEmail" placeholder="email@entreprise.com" data-error="Ins&eacute;rez une adresse email valide" value="{{ old('email') }}" required>
            					<div class="help-block with-errors"></div>
            				</div>
            			</div>
            			<div class="form-group">
            				<label for="inputLoginPassword" class="col-lg-3 control-label">Mot de Passe</label>
            				<div class="col-lg-9">
            					<input name="password" type="password" class="form-control" id="inputLoginPassword" placeholder="Mot de Passe" required>
            					<div class="help-block with-errors"></div>
            				</div>
            			</div>
            			<div class="form-group">
            				<div class="col-lg-12">
            					<button type="submit" class="btn btn-primary btn-block">Connexion</button>
            				</div>
            			</div>
            		</fieldset>
            	</form>
            </div>
        </div>
    </div>
</div>
@endsection