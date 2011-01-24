/**********************************************
Internet Communication and Mobility F28IM
Simple e-Commerce Application Coursework
Computer Science, Year 2
Jamie Spence & Michael Shannon
**********************************************/ 

function validate_email(field, alerttxt){
    with (field) {
        var pattern = /^[_A-Za-z0-9-]+(\\.[_A-Za-z0-9-]+)*@hw.ac.uk$/;
        if (value.match(pattern)) {
			return true;
        }
        else {            			
		
		alert(alerttxt);
		return false;

        }
    }
}

function validate_name(field, alerttxt){
    with (field) {
        if (value == null || value == "") {
            alert(alerttxt);
            return false;
        }
        else {
            return true;
        }
    }
}

function validate_phone(field, alerttxt){
    with (field) {
        if (value == null || value == "" || (value.length != 11 && value.length != 13)) {
            alert(alerttxt);
            return false;
        }
        else {
            return true;
        }
    }
}

function validate_dropdown(field){
    with (field) {
        if (value == null || value == 0) {
            return false;
        }
        else {
            return true;
        }
    }
}

function valid(thisform){
    with (thisform) {
		if (validate_dropdown(item1) == false && validate_dropdown(item2) == false && validate_dropdown(item3) == false) {
			alert("You didn't select anything to buy!");
			item1.focus();
            return false;
        }
		
		if (!validate_name(first, "Please enter a first name!")) {
            first.focus();
            return false;
        }
        if (!validate_name(last, "Please enter a last name!")) {
            last.focus();
            return false;
        }
        if (!validate_email(email, "Not a valid @hw.ac.uk e-mail address!")) {
            email.focus();
            return false;
        }
		if (!validate_name(adrStreet, "Please enter a street!")) {
            last.focus();
            return false;
        }
		if (!validate_name(adrCity, "Please enter a city!")) {
            last.focus();
            return false;
        }
		if (!validate_name(adrPostcode, "Please enter a postcode!")) {
            last.focus();
            return false;
        }
		if (!validate_phone(adrPhone, "Please enter a valid phone number")) {
            last.focus();
            return false;
        }
      
    }
}
