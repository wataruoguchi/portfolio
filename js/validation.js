/*global document: false */
function checkNull(inputId){
	'use strict';
	var inputString = document.getElementById(inputId);
	return (inputString !== null && inputString.value.length>0) ? true : false;
}
function checkEmail(emailId){
	'use strict';
	var emailString = document.getElementById(emailId), returnValue, pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(checkNull(emailId)) {
		returnValue = pattern.test(emailString.value);
	} else {
		returnValue = false;
	}
	return returnValue;
}
function isAbleToBeActive(emailId, nameId, messageId, buttonId){
	'use strict';
	if(checkEmail(emailId)&&checkNull(nameId)&&checkNull(messageId)){
		document.getElementById(buttonId).removeAttribute("disabled");		
	}else{
		document.getElementById(buttonId).setAttribute("disabled","");
	}
}