function formvalidate() {
	if ($('#membershiptype').val() == 0) {
		$('#membershiptype').css("border-color", "red");
		return false;
	}

	if ($('#fname1').val().length == 0) {
		$('#fname1').css("border-color", "red");
		return false;
	}

	if ($('#zip1').val().length != 5) {
		$('#zip1').css("border-color", "red");
		return false;
	}

	if ($('#st1').val().length != 2) {
		$('#st1').css("border-color", "red");
		return false;
	}

	if ($('#ph1').val().length > 0 && $('#ph1').val().length != 10) {
		$('#ph1').css("border-color", "red");
		return false;
	}

}
