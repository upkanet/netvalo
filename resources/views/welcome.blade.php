@extends('layouts.app')

@section('title','Estimez gratuitement le prix de votre entreprise')

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
        <div class="col-sm-5 col-sm-offset-1">
            <div class="well bs-component">
                <form class="form-horizontal" role="form" data-toggle="validator">
          <fieldset>
            <legend>Cr&eacute;er un compte gratuitement</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-3 control-label">Email</label>
              <div class="col-lg-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="email@entreprise.com" data-error="Ins&eacute;rez une adresse email valide" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">Mot de Passe</label>
              <div class="col-lg-9">
                <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Mot de Passe" data-error="6 caract&egrave;res minimum" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputConfPassword" class="col-lg-3 control-label">Confirmer</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="inputConfPassword" data-match="#inputPassword" placeholder="Confirmez votre Mot de Passe" data-match-error="Le mot de passe ne correspond pas." required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-primary btn-block">Cr&eacute;er</button>
              </div>
            </div>
          </fieldset>
        </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">D&eacute;jà membre ?</h3>
                </div>
                <div class="panel-body">
                    <button class="btn btn-default btn-block" data-toggle="modal" data-target="#loginModal">Se connecter</button>
                </div>
            </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Vos services <strong>gratuits</strong></h3>
        </div>
        <div class="panel-body">
          <ul id="services_list">
            <li>Estimation de la valeur selon <strong>8 m&eacute;thodes</strong></li>
            <li>Analyse Financi&egrave;re</li>
            <li>Conseils Strat&eacute;giques</li>
            <li>Mise en relation avec des Experts</li>
          </ul>
        </div>
      </div>
        </div>
    </div>
  <div class="row">
    <p class="text-center" id="footer">2017 &copy; NetValo</p>
  </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Acc&egrave;s membre</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" data-toggle="validator">
          <fieldset>
            <div class="form-group">
              <label for="inputLoginEmail" class="col-lg-3 control-label">Email</label>
              <div class="col-lg-9">
                <input type="email" class="form-control" id="inputLoginEmail" placeholder="email@entreprise.com" data-error="Ins&eacute;rez une adresse email valide" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputLoginPassword" class="col-lg-3 control-label">Mot de Passe</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" id="inputLoginPassword" placeholder="Mot de Passe" required>
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