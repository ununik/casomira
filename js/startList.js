function createStartList()
{
	var error = false;
	
	var startPo = $('#startPoS').val();
	if (startPo == '' || !$.isNumeric(startPo)) {
		error = true;
		$('#startPoS').css('background-color', 'red');
	} else {
		$('#startPoS').css('background-color', 'white');
	}
	
	var prvniCislo = $('#prvniCislo').val();
	if (prvniCislo == '' || !$.isNumeric(prvniCislo)) {
		error = true;
		$('#prvniCislo').css('background-color', 'red');
	} else {
		$('#prvniCislo').css('background-color', 'white');
	}
	
	var posledniCislo = $('#posledniCislo').val();
	if (posledniCislo == '' || !$.isNumeric(posledniCislo)) {
		error = true;
		$('#posledniCislo').css('background-color', 'red');
	} else {
		$('#posledniCislo').css('background-color', 'white');
	}
	
	var datum = isDate($('#datum').val());
	if (datum == false) {
		$('#datum').css('background-color', 'red');
	} else {
		$('#datum').css('background-color', 'white');
		$('#datum').val(datum);
	}
	
	var cas = isTime($('#cas').val());
	if (cas == false) {
		$('#cas').css('background-color', 'red');
	} else {
		$('#cas').css('background-color', 'white');
		$('#cas').val(cas);
	}
	
}

function isDate(ExpiryDate) { 
    var objDate,  // date object initialized from the ExpiryDate string 
        mSeconds, // ExpiryDate in milliseconds 
        day,      // day 
        month,    // month 
        year;     // year 
    ExpiryDate = ExpiryDate.replace(/ /g,'');
    
    if(ExpiryDate.substring(1, 2) == '.') {
    	ExpiryDate = '0' + ExpiryDate;
    }
    if(ExpiryDate.substring(4, 5) == '.') {
    	ExpiryDate = ExpiryDate.substring(0, 3) + '0' + ExpiryDate.substring(3, 9);
    }
    // date length should be 10 characters (no more no less) 
    if (ExpiryDate.length !== 10) { 
        return false; 
    } 
    // third and sixth character should be '/' 
    if (ExpiryDate.substring(2, 3) !== '.' || ExpiryDate.substring(5, 6) !== '.') { 
        return false; 
    } 
    // extract month, day and year from the ExpiryDate (expected format is mm/dd/yyyy) 
    // subtraction will cast variables to integer implicitly (needed 
    // for !== comparing) 
    day = ExpiryDate.substring(0, 2) - 0; // because months in JS start from 0 
    month = ExpiryDate.substring(3, 5) - 0; 
    year = ExpiryDate.substring(6, 10) - 0; 
    if (day < 1 || day > 31) {
    	return false;
    }
    if (month < 1 || month > 12) {
    	return false;
    }
    // test year range 
    if (year < 1000 || year > 3000) { 
        return false; 
    } 
    return ExpiryDate; 
}

function isTime(ExpiryDate) { 
    var objDate,  // date object initialized from the ExpiryDate string 
        mSeconds, // ExpiryDate in milliseconds 
        day,      // day 
        month,    // month 
        year;     // year 
    ExpiryDate = ExpiryDate.replace(/ /g,'');
    
    if(ExpiryDate.substring(1, 2) == ':') {
    	ExpiryDate = '0' + ExpiryDate;
    }
    if(ExpiryDate.substring(4, 5) == ':') {
    	ExpiryDate = ExpiryDate.substring(0, 3) + '0' + ExpiryDate.substring(3, 7);
    }
    if (ExpiryDate.length == 7) { 
    	ExpiryDate = ExpiryDate.substring(0, 6) + '0' + ExpiryDate.substring(6, 7);
    }
    // date length should be 10 characters (no more no less) 
    if (ExpiryDate.length !== 8) { 
        return false; 
    } 
    // third and sixth character should be '/' 
    if (ExpiryDate.substring(2, 3) !== ':' || ExpiryDate.substring(5, 6) !== ':') { 
        return false; 
    } 
    // extract month, day and year from the ExpiryDate (expected format is mm/dd/yyyy) 
    // subtraction will cast variables to integer implicitly (needed 
    // for !== comparing) 
    hour = ExpiryDate.substring(0, 2) - 0; // because months in JS start from 0 
    min = ExpiryDate.substring(3, 5) - 0; 
    sec = ExpiryDate.substring(6, 8) - 0; 
    if (hour < 0 || hour > 23) {
    	return false;
    }
    if (min < 0 || min > 59) {
    	return false;
    }
    // test year range 
    if (sec < 0 || year > 59) { 
        return false; 
    } 
    return ExpiryDate; 
}