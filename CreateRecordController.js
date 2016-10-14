$(document).ready(function(){
	$('input[name=phone]').blur(function(){
		if($('input[name=phone]').val() != "")
			getInfo($('input[name=phone]').val());
	});
});

function getInfo(phoneNumber){

	var ajax = {
	
		type: "GET",
		url: "Assignment5b.php?phoneNumber=" + phoneNumber,
		mimeType: "text"
	}
	
	$.ajax(ajax).done(fill);
}

function fill(data, status){
	var jsonData = JSON.parse(data);
	
	$('input[name=fname]').val(jsonData.fname);
	$('input[name=mi]').val(jsonData.mi);
	$('input[name=lname]').val(jsonData.lname);
	$('input[name=account]').val(jsonData.account);
}