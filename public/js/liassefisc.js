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

function updateRez(){
	var rex = sig('prod_exploit') - sig('charges_exploit');
	var rfi = sig('prod_fi') - sig('charges_fi');
	var rcai = rex + rfi + sig('benef_att') - sig('pertes_supp');
	var rexcep = sig('prod_excep') - sig('charges_excep');
	var rn = sig('prod') - sig('charges');

	$("#rex").val(rex);
	$("#rfi").val(rfi);
	$("#rcai").val(rcai);
	$("#rexcep").val(rexcep);
	$("#rn").val(rn);
}

function updateSIG(){
	listSIG.forEach(function(tot){
		$("#"+tot).val(sig(tot));
	});
	if($("#rex").length){
		updateRez();
	}
}

function deleteBilanCR(){
	if(confirm('Supprimer ?')){
		console.log('SEND delete (token:' + csrf_token + ') to ' + deleteBilanCRroute);
		destroyBilanCR();
	}
}

function destroyBilanCR(){
	$.ajax({
		url: deleteBilanCRroute,
		type: 'post',
		data: {
			_method: 'delete',
			_token: csrf_token
		},
		success: function(result){
			window.location.href = companyRoute;
		}
	});
}

$(document).ready(function(){
	$('.input-bilancr').change(updateSIG);
	$('#deleteBilanCRbtn').click(deleteBilanCR);
});