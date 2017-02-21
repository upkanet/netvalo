<div class="row indic-table-header">
	<div class="col-sm-6">Actif Economique</div>
	<div class="col-sm-6">Capital Employ&eacute;</div>
</div>
<div class="row">
	<div class="col-sm-4">Immos</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['Immo']}}</div>
	<div class="col-sm-4">Cap. Propres</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['CP']}}</div>
</div>
<div class="row">
	<div class="col-sm-4">BFR</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['BFR']}}</div>
	<div class="col-sm-4">Dette Fi.</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['DetteFi']}}</div>
</div>
<div class="row">
	<div class="col-sm-4">Tr&eacute;so. Nette</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['TrezNette']}}</div>
</div>
<div class="row indic-table-footer">
	<div class="col-sm-4">Total</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['AE']}}</div>
	<div class="col-sm-4">Total</div>
	<div class="col-sm-2 text-right">{{$indic->evoBilan()['CE']}}</div>
</div>