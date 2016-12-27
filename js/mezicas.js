function secondClick(id)
{
    timestamp = Date.now();
    var mypostrequest=new ajaxRequest();
    mypostrequest.onreadystatechange=function(){
    if (mypostrequest.readyState==4){
        if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
            $("#results").html(mypostrequest.responseText);
            startovkaList();
        }
    }
    };
    parameters = "timestamp="+timestamp+"&id="+id;
    mypostrequest.open("POST", "ajax/mezicas/secondClick.php", true);
    mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    mypostrequest.send(parameters);
}

function addNewTime(id, timestamp) {
    if (timestamp == 0) {
        timestamp = Date.now();
    }
    var mypostrequest=new ajaxRequest();
    mypostrequest.onreadystatechange=function(){
    if (mypostrequest.readyState==4){
        if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
            $("#results").html(mypostrequest.responseText);
            startovkaList();
         }
    }
    };
    parameters = "timestamp="+timestamp+"&id="+id;
    mypostrequest.open("POST", "ajax/mezicas/new.php", true);
    mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    mypostrequest.send(parameters);
}
function deleteLastMezicas(id)
{
    var mypostrequest=new ajaxRequest();
    mypostrequest.onreadystatechange=function(){
    if (mypostrequest.readyState==4){
        if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1){
          $("#results").html(mypostrequest.responseText);
          startovkaList();
       }
    }
    };
    parameters = "id="+id;
    mypostrequest.open("POST", "ajax/mezicas/deleteLast.php", true);
    mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    mypostrequest.send(parameters);
}
