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
        @foreach ($companies as $company)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="panel panel-primary"> 
                <div class="panel-heading text-center"><span class="glyphicon glyphicon-knight" aria-hidden="true"></span> {{$company->name}}</div>
                <div class="panel-body text-center">
                    <div class="col-sm-6">
                        <a href="companies/{{$company->id}}" class="btn btn-sm btn-primary btn-block">Voir</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{route('companies.edit',$company)}}" class="btn btn-sm btn-success btn-block">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="panel panel-primary"> 
                <div class="panel-body"> <a href="{{route('companies.create')}}" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter une entreprise </a></div>
            </div>
        </div>
    </div>
    <h4>Vos Coordonn&eacute;es</h4>
    <div class="panel panel-default">
        <div class="panel-body">
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <h4>Vos Demandes</h4>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td><strong>Demandes</strong></td>
                        <td><strong>Date</strong></td>
                        <td><strong>Soci&eacute;t&eacute;</strong></td>
                        <td><strong>Valo le jour de la demande</strong></td>
                        <td><strong>Statut</strong></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Mise en relation - Conseil en Strat&eacute;gie
                        </td>
                        <td>
                            23/02/2017
                        </td>
                        <td>
                            Empty Company
                        </td>
                        <td>
                            4.5M€ -> 6.3M€ (2017)
                        </td>
                        <td>
                            Partenaires identifiés
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mise en relation - Vente de la soci&eacute;t&eacute;
                        </td>
                        <td>
                            23/02/2017
                        </td>
                        <td>
                            World Company
                        </td>
                        <td>
                            4.5M€ -> 6.3M€ (2017)
                        </td>
                        <td>
                            Partenaire Valid&eacute;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
