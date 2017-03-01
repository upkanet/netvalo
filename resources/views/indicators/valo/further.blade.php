<ul id="services_list">
    <li><span class="glyphicon glyphicon-briefcase"></span> Strat&eacute;gie
    	<ul>
    		<li><a href="#" onclick="openRequest('strat');">&Ecirc;tre conseillé pour g&eacute;rer cette entreprise et am&eacute;liorer sa valeur</a></li>
    	</ul>
    </li>
    <li><span class="glyphicon glyphicon-euro"></span> Cession-Acquisition
    	<ul>
    		<li><a href="#" onclick="openRequest('sell');">Trouver un conseiller pour Vendre cette entreprise</a></li>
    		<li><a href="#" onclick="openRequest('buy');">Trouver un conseiller pour Acheter cette entreprise</a></li>
    	</ul>
    </li>
	<li><span class="glyphicon glyphicon-signal"></span> Valorisation
		<ul>
			<li><a href="#" onclick="openRequest('det_valo');">Obtenir la valorisation détaill&eacute;e reprenant les 8 m&eacute;thodes</a> (90&euro; HT)</li>
			<li><a href="#" onclick="openRequest('fi_analysis');">Obtenir une analyse financière personnalisée sur la base de la valorisation détaill&eacute;e</a> (190&euro; HT)</li>
		</ul>
	</li>
 </ul>
 <hr>
 <p class="text-center">Pour toute autre demande :
 	<button class="btn btn-default" onclick="openRequest('contact');">Nous contacter</button>
 </p>

@section('js')
@parent
<script src="{{url('/js/request.js')}}"></script>
@endsection