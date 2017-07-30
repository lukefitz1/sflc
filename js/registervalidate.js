function registervalidate() {
	if ($('#fname1').val().length == 0) {
		$('#fname1').css("border-color", "red");
		return false;
	}

	if ($('#lname1').val().length == 0) {
		$('#lname1').css("border-color", "red");
		return false;
	}

	if ($('#email1').val().length == 0) {
		$('#email1').css("border-color", "red");
		return false;
	}

	if ($('#ph1').val().length > 0 && $('#ph1').val().length != 10) {
		$('#ph1').css("border-color", "red");
		return false;
	}

	if ($("input[name='continuinged']:checked").length == 0){
	  	$('.radioerror4').css("display", "block");
		return false;
	}

	if ($('#ph1').val().length > 0 && $('#ph1').val().length != 10) {
		$('#ph1').css("border-color", "red");
		return false;
	}

	if ($("input[name='member']:checked").length == 0){
	  	$('.radioerror').css("display", "block");
		return false;
	}

	if ($('input[name=member]:checked').val() == "yes") {
		if ($("input[name='paynow']:checked").length == 0){
		  	$('.radioerror2').css("display", "block");
			return false;
		}
	}
	if ($('input[name=member]:checked').val() == "no") {
		if ($("input[name='register']:checked").length == 0){
		  	$('.radioerror3').css("display", "block");
			return false;
		}
	}

}