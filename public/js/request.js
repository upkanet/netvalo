function openRequest(reqType){
	$('#modalRequestMessage').hide();
	var mod_config = {
		strat:{
			title: 'Optimiser cette entreprise',
			message: 'Vous souhaitez &ecirc;tre mis en relation avec un consultant qui vous accompagnera dans la gestion de votre entreprise.'
		},
		sell:{
			title: 'Transmettre cette entreprise',
			message: 'Vous souhaitez &ecirc;tre mis en relation avec un conseil qui vous accompagnera dans la transmission de votre entreprise.'
		},
		buy:{
			title: 'Acqu&eacute;rir cette entreprise',
			message: 'Vous souhaitez &ecirc;tre mis en relation avec un conseil pour acqu&eacute;rir cette entreprise.'
		},
		valo_det:{
			title: 'Obtenir la valorisation d&eacute;taill&eacute;e',
			message: 'Vous souhaitez acqu&eacute;rir la valorisation d&eacute;taill&eacute;e de cette entreprise selon les 8 m&eacute;thodes reconnues.'
		},
		fi_analysis:{
			title: 'Obtenir une analyse financi&egrave;re compl&egrave;te',
			message: 'Vous souhaitez obtenir une analyse financi&egrave;re compl&egrave;te qui inclue aussi la valorisation d&eacute;taill&eacute;e de cette entreprise selon les 8 m&eacute;thodes reconnues.'
		},
		contact:{
			title: 'Nous contacter',
			message: 'Vous recherchez un autre service concernant cette entreprise.'
		},
	};
	if(reqType == 'contact'){
		$('#modalRequestMessage').show();
	}

	$('#request_modal-title').html(mod_config[reqType].title);
	$('#request_modal-message').html(mod_config[reqType].message);
	$('#request_modal-rtype').val(reqType);
	$('#request_modal-send-btn').click(function(){
		ga('send','event','Requests','send',reqType);
		$('#request_form').submit();
	});
	$('#request_modal').modal('show');
}

$.ready(function(){
	$('#modalRequestMessage').hide();
});