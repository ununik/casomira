function atShootingRange(number, cisloStrelby) {
	var mypostrequest=new ajaxRequest();
    mypostrequest.onreadystatechange=function(){
    if (mypostrequest.readyState==4){
        if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
            $("#results").html(mypostrequest.responseText);
            startovkaListStrelba();
         }
    }
    };
    parameters = "id="+number+"&actualShooting="+cisloStrelby;
    mypostrequest.open("POST", "ajax/strelba/new.php", true);
    mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    mypostrequest.send(parameters);
}

function hit(athlete, cisloStrelby, terc) {
	tercSelector = $("#target_"+terc);
	tercSelector.css('background-image', 'url(images/target/hit.svg)');
	tercSelector.attr("onclick","miss('"+athlete+"','"+cisloStrelby+"','"+terc+"')");
	$("#checkboxForTarget"+terc).attr("checked", true);
}
function miss(athlete, cisloStrelby, terc) {
	tercSelector = $("#target_"+terc);
	tercSelector.css('background-image', 'url(images/target/miss.svg)');
	tercSelector.attr("onclick","hit('"+athlete+"','"+cisloStrelby+"','"+terc+"')");
	$("#checkboxForTarget"+terc).attr("checked", false);
	tercSelector.removeClass("hitTarget");
}

function newShooting(athlete, cisloStrelby) {
	var mypostrequest=new ajaxRequest();
    mypostrequest.onreadystatechange=function(){
    if (mypostrequest.readyState==4){
        if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
            //$("#results").html(mypostrequest.responseText);
        	getAllShootingsForNumber(athlete);
            startovkaListStrelba();
         }
    }
    };
    if ($("#checkboxForTarget0").is(':checked')) {
        a = 1;
    } else {
    	a = 0;
    }
    if ($("#checkboxForTarget1").is(':checked')) {
        b = 1;
    } else {
    	b = 0;
    }
    if ($("#checkboxForTarget2").is(':checked')) {
        c = 1;
    } else {
    	c = 0;
    }
    if ($("#checkboxForTarget3").is(':checked')) {
        d = 1;
    } else {
    	d = 0;
    }
    if ($("#checkboxForTarget4").is(':checked')) {
        e = 1;
    } else {
    	e = 0;
    }
    parameters = "id="+athlete+"&cisloStrelby="+cisloStrelby+"&a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e;
    mypostrequest.open("POST", "ajax/strelba/done.php", true);
    mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    mypostrequest.send(parameters);
}
function getAllShootingsForNumber(number) {
	var mypostrequest=new ajaxRequest();
    mypostrequest.onreadystatechange=function(){
    if (mypostrequest.readyState==4){
        if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
            $("#results").html(mypostrequest.responseText);
            startovkaListStrelba();
         }
    }
    };
    parameters = "id="+number;
    mypostrequest.open("POST", "ajax/strelba/allForNumber.php", true);
    mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    mypostrequest.send(parameters);
}