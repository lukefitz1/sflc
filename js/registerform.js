/*
* @Author: Luke
* @Date:   2016-03-20 11:38:54
* @Last Modified by:   Luke
* @Last Modified time: 2016-03-30 19:55:19
*/

'use strict';

$(document).ready(function() {
	$('input[name=member]').click(function () {
	    if (this.value == "yes") {
	        $(".paynow").show();
	        $(".register").hide();
	        $('input[name=register]').attr("checked", false);
	    } else {
	        $(".register").show();
	        $(".paynow").hide();
	        $('input[name=paynow]').attr("checked", false);
	    }
	});
	
	$('input[name=continuinged]').click(function () {
	    if (this.value == "yes") {
	        $(".license").show();
	        
	    } else {
	        $(".license").hide();
	        
	    }
	});
});