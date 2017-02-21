<div class="row indic-table-header">
	<div class="col-sm-3"><em>ann&eacute;e</em></div>
	<div class="col-sm-3">{{$indic->year - 2}}</div>
	<div class="col-sm-3">{{$indic->year - 1}}</div>
	<div class="col-sm-3">{{$indic->year}}</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">CA</div>
	<div class="col-sm-3 text-right">{{million($indic->Renta3()[$indic->year - 2]['CA'])}}M&euro;</div>
	<div class="col-sm-3 text-right">{{million($indic->Renta3()[$indic->year - 1]['CA'])}}M&euro;</div>
	<div class="col-sm-3 text-right">{{million($indic->Renta3()[$indic->year]['CA'])}}M&euro;</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">EBE</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year - 2]['EBE'] / 1000))}}k&euro;</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year - 1]['EBE'] / 1000))}}k&euro;</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year]['EBE'] / 1000))}}k&euro;</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year - 2]['EBEp']}}%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year - 1]['EBEp']}}%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year]['EBEp']}}%</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">Rex</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year - 2]['Rex'] / 1000))}}k&euro;</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year - 1]['Rex'] / 1000))}}k&euro;</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year]['Rex'] / 1000))}}k&euro;</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year - 2]['Rexp']}}%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year - 1]['Rexp']}}%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year]['Rexp']}}%</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">RN</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year - 2]['RN'] / 1000))}}k&euro;</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year - 1]['RN'] / 1000))}}k&euro;</div>
	<div class="col-sm-3 text-right">{{mille(intval($indic->Renta3()[$indic->year]['RN'] / 1000))}}k&euro;</div>
</div>
<div class="row">
	<div class="col-sm-3 text-center">%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year - 2]['RNp']}}%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year - 1]['RNp']}}%</div>
	<div class="col-sm-3 text-right">{{$indic->Renta3()[$indic->year]['RNp']}}%</div>
</div>