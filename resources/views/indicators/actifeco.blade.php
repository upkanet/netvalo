<div class="row indic-table-header">
	<div class="col-sm-6">Actif Economique</div>
	<div class="col-sm-6">Capital Employ&eacute;</div>
</div>
<div class="row">
	<div class="col-sm-3">Immos</div>
	<div class="col-sm-3 text-right">{{mille($indic->Immo())}}</div>
	<div class="col-sm-3">Cap. Propres</div>
	<div class="col-sm-3 text-right">{{mille($indic->CP())}}</div>
</div>
<div class="row">
	<div class="col-sm-3">BFR</div>
	<div class="col-sm-3 text-right">{{mille($indic->BFR())}}</div>
	<div class="col-sm-3">Dette Fi.</div>
	<div class="col-sm-3 text-right">{{mille($indic->DetteFi())}}</div>
</div>
<div class="row">
	<div class="col-sm-3">Tr&eacute;so. Nette</div>
	<div class="col-sm-3 text-right">{{mille($indic->TrezNette())}}</div>
</div>
<div class="row indic-table-footer">
	<div class="col-sm-3">Total</div>
	<div class="col-sm-3 text-right">{{mille($indic->AE())}}</div>
	<div class="col-sm-3">Total</div>
	<div class="col-sm-3 text-right">{{mille($indic->CE())}}</div>
</div>