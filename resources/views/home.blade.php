@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="css/welcome.css">
@endsection

@section('js')
@parent
<script src="js/home.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9"><br><h4>NetValo</h4></div>
        <div class="col-sm-3"><br><button class="btn btn-default" id="btnLogout">D&eacute;connexion</button></div>
        <form id="formLogout" action="{{ route('logout') }}" method="post" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <div class="page-header">
        <h3>Vos entreprises</h3>
    </div>
    @foreach ($companies as $company)
    <div class="col-sm-3">
        <div class="panel panel-primary"> 
            <div class="panel-heading text-center"><span class="glyphicon glyphicon-knight" aria-hidden="true"></span> {{$company->name}}</div>
            <div class="panel-body text-center">
                <div class="col-sm-6">
                    <a href="companies/{{$company->id}}" class="btn btn-sm btn-primary btn-block">Voir</a>
                </div>
                <div class="col-sm-6">
                    <a href="#" class="btn btn-sm btn-success btn-block">Modifier</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-sm-3">
        <div class="panel panel-primary"> 
            <div class="panel-body"> <button class="btn btn-warning btn-block"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter une entreprise </button></div>
        </div>
    </div>
</div>
@endsection
