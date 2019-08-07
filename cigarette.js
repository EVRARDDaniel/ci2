function insertcigarette2(timestamp) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("repinsert").innerHTML = this.responseText;	  //attention ce contenu est éffacé par countcigarette2() ????
	  
    }
  };
  
  var txtraison = document.getElementById("idraison").value;
  
  //alert(txtraison);
  
  xhttp.open("GET", "insertcigarette2.php?raison="+txtraison+"&tmstp="+timestamp, false);
  xhttp.send();
  
  countcigarette2();
  tabcigarette();
  lastcigdate();
  //chronoStart()
  
  document.getElementById("idraison").value='';
  
}

function countcigarette2() {
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("count").innerHTML = this.responseText;
       
    }
  };
  xhttp.open("GET", "countcigarette2.php", false);
  xhttp.send();
 
}


function tabcigarette() {
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tabcigarette").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "tabcigarette.php", false);
  xhttp.send();
}




function lastcigdate() {
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
	var str = this.responseText
	var array = str.split("toto")
	//console.log(array[1])
	var dd = array[1]
	var intger = parseInt(dd,10);
	//console.log(dd)
	
	chronoStartParam(intger)
	
	var res = new Date(intger)
	
	/////////////////////////////////////
	
	if  ((res.getMonth()+1)<10) { moisavec2chiffres = '0'+(res.getMonth()+1) ; } else { moisavec2chiffres = (res.getMonth()+1) ;}
 
	if  (res.getSeconds()<10) { secondesavec2chiffres = '0'+(res.getSeconds()) ; } else { secondesavec2chiffres = res.getSeconds() ;}
 
	if  (res.getMinutes()<10) { minutesavec2chiffres = '0'+(res.getMinutes()) ; } else { minutesavec2chiffres = res.getMinutes() ;}
 
	if  (res.getHours()<10) { heureavec2chiffres = '0'+(res.getHours()) ; } else { heureavec2chiffres = res.getHours() ;}
 
	if  (res.getDate()<10) { jouravec2chiffres = '0'+(res.getDate()) ; } else { jouravec2chiffres = res.getDate() ;}
 
 
  
  var time = res.getFullYear()+'-'+ moisavec2chiffres +'-'+jouravec2chiffres+'&nbsp;'+heureavec2chiffres + ":" + minutesavec2chiffres + ":" + secondesavec2chiffres;
  
  
 // document.getElementById("horloge").innerHTML = time;
	
	///////////////////////////////////////////////////////
	
	//formatted_date = res.getFullYear() + "-" + (res.getMonth() + 1) + "-" + res.getDate() + " " + res.getHours() + ":" + res.getMinutes() + ":" + res.getSeconds() 
					
    document.getElementById("lastcigdate").innerHTML = array[0] + " | " + time
      
    }
  };
  xhttp.open("GET", "lastcigdate.php", false);
  xhttp.send();
}












function lastdaywithcigarette() {
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			document.getElementById("lastdaywithcigarette").innerHTML = this.responseText
	    }
  };
  xhttp.open("GET", "lastdaywithcigarette.php", false);
  xhttp.send();
}












