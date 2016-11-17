$('document').ready(function() {
	menu();
});

function menu()
{
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  $('body').html(mypostrequest.responseText);
	  }
	  else{
	   //alert("An error has occured making the request")
	  }
	 }
	}
	parameters = '';
	mypostrequest.open("POST", "ajax/main_menu.php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function page(page)
{
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  $('body').html(mypostrequest.responseText);
		  
		  switch (page) {
		  	case 'mereni_mezicasu':
		  		$( document ).ready(function() {
					  startovkaList();
				});
		  		break;
		  	case 'strelba':
		  		$( document ).ready(function() {
					  startovkaListStrelba();
				});
		  		break;
		  }
	  }
	  else{
	   //alert("An error has occured making the request")
	  }
	 }
	}
	parameters = '';
	mypostrequest.open("POST", "ajax/"+page+".php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}

function subpage(page)
{
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function(){
	 if (mypostrequest.readyState==4){
	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
		  $('#subpage').html(mypostrequest.responseText);
	  }
	  else{
	   //alert("An error has occured making the request")
	  }
	 }
	}
	parameters = '';
	mypostrequest.open("POST", "ajax/"+page+".php", true)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}
function startovkaList()
{
    var mypostrequest=new ajaxRequest()
  	mypostrequest.onreadystatechange=function(){
  	 if (mypostrequest.readyState==4){
  	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
  		$('#startovkaList').html(mypostrequest.responseText);
  	  }
  	  else{
  	   //alert("An error has occured making the request")
  	  }
  	 }
  	}
  	parameters = '';
  	mypostrequest.open("POST", "ajax/mezicas/startovkaList.php", true)
  	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
  	mypostrequest.send(parameters)
}
function startovkaListStrelba()
{
    var mypostrequest=new ajaxRequest()
  	mypostrequest.onreadystatechange=function(){
  	 if (mypostrequest.readyState==4){
  	  if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
  		$('#startovkaList').html(mypostrequest.responseText);
  	  }
  	  else{
  	   //alert("An error has occured making the request")
  	  }
  	 }
  	}
  	parameters = '';
  	mypostrequest.open("POST", "ajax/strelba/startovkaList.php", true)
  	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
  	mypostrequest.send(parameters)
}
