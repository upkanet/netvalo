<p>
CAGR 3 ans : {{$indic->CAGR()}}% <span class="glyphicon @if($indic->CAGR() > 0) glyphicon-circle-arrow-up indic-positive @else glyphicon-circle-arrow-down indic-negative @endif" aria-hidden="true"></span><br>
ROCE : {{$indic->ROCE()}}% <span class="glyphicon @if($indic->ROCE() >= 10) glyphicon-ok indic-positive @elseif($indic->ROCE() >= 5) glyphicon-minus indic-avg @else glyphicon-remove indic-negative @endif" aria-hidden="true"></span><br>
Marge Op&eacute;rationnelle : {{$indic->MargeOp()}}% <span class="glyphicon @if($indic->MargeOp() >= 8) glyphicon-ok indic-positive @elseif($indic->MargeOp() >= 2) glyphicon-minus indic-avg @else glyphicon-remove indic-negative @endif" aria-hidden="true"><br>

</p>