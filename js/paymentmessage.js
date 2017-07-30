$(document).ready(function() {
	if ($('#paypalpayment').is(':checked')) {
		$('#paybypaypal').css("display", "block");
		$('#submit').attr('value', 'Next')
	}
	else if ($('#checkpayment').is(':checked')) { 
		$('#paybycheck').css("display", "block");
		$('#submit').attr('value', 'Submit')
	}

	$('#paypalpayment').click(function() {
		$('#paybycheck').css("display", "none");
		$('#paybypaypal').css("display", "block");
		$('#submit').attr('value', 'Next')
	});
	$('#checkpayment').click(function() {
		$('#paybypaypal').css("display", "none");
		$('#paybycheck').css("display", "block");
		$('#submit').attr('value', 'Submit')
	});
});