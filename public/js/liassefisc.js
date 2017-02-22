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

function updateSIG(){
	listSIG.forEach(function(tot){
		$("#"+tot).val(sig(tot));
	});
}

$(document).ready(function(){
	$('.input-bilancr').change(updateSIG);
});