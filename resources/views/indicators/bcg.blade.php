<div class="row">
	<div class="col-sm-6 bcg-cell @if($indic->BCG() == config('indicator.bcg.star')) bcg-cell-selected @endif">Vedette</div>
	<div class="col-sm-6 bcg-cell @if($indic->BCG() == config('indicator.bcg.dilemma')) bcg-cell-selected @endif">Dilemme</div>
</div>
<div class="row">
	<div class="col-sm-6 bcg-cell @if($indic->BCG() == config('indicator.bcg.cashcow')) bcg-cell-selected @endif">Cash Cow</div>
	<div class="col-sm-6 bcg-cell @if($indic->BCG() == config('indicator.bcg.deadend')) bcg-cell-selected @endif">Poids Mort</div>
</div>