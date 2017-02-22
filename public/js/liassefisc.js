function sig(field){
	var sel = 'input[name=\''+field+'\']';
	var ret = 0;
	if($(sel).length){
		ret = parseInt($(sel).val() || 0);
	}
	else{
		jQuery.each(ss_tots[field],function(ss_tot_key, ss_tot_val){
			ret += sig(ss_tot_val);
		});
	}
	return ret;
}

sig('actif_imm');

function updateSIG(){
	var listSIG = ['actif_imm','actif_circ','actif','capitaux_propres','autres_fds_propres','prov_rc','tot_4','passif'];

	listSIG.forEach(function(tot){
		$("#"+tot).val(sig(tot));
	});
}

$(document).ready(function(){
	$('.input-bilan').change(updateSIG);
});