@extends('layouts.app')

@section('title','Mes entreprises')

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
        <div class="col-sm-9"><br><h3>NetValo</h3></div>
        <div class="col-sm-3"><br><button class="btn btn-default" id="btnLogout">D&eacute;connexion</button></div>
        <form id="formLogout" action="{{ route('logout') }}" method="post" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <div class="row">
        <h4>Vos entreprises</h4>
        @include('home.companies')
    </div>
    <h4>Vos Coordonn&eacute;es</h4>
    <div class="panel panel-default">
        <div class="panel-body">
        @include('home.coordz')
        </div>
    </div>
    <h4>Vos Demandes</h4>
    <div class="panel panel-default">
        <div class="panel-body">
        @include('home.requests')
        </div>
    </div>
</div>
@endsection
