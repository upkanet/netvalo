function selectYear(){
	var year = $('#selectYearInput').val();
	$('#selectYear').collapse("hide");
	addYear(year);
}


function addYear(year){
	var company_id = $('#companyIdInput').val();
	var newYearBtnBlock = '<div class="col-sm-4"><p class="text-center"><a href="../bilans/create?company=' + company_id + '&year='+year+'" class="btn btn-primary btn-rnd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p></div><div class="col-sm-4 gradYear"><p class="text-center yearList">'+year+'</p></div><div class="col-sm-4"><p class="text-center"><a href="../crs/create?company=' + company_id + '&year='+year+'" class="btn btn-primary btn-rnd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p></div>';
	$('#addYear').append(newYearBtnBlock);
}