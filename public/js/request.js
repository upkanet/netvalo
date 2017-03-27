function openRequest(reqType){
	$('#modalRequestMessage').hide();

	if(reqType == 'contact'){
		$('#modalRequestMessage').show();
	}

	$('#request_modal-title').html(req_type_dataset[reqType].title);
	$('#request_modal-message').html(req_type_dataset[reqType].message);
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