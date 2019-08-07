var myVar = setInterval(myTimer, 1000);

function myTimer() {
  /*var d = new Date();					
  var t = d.toLocaleTimeString();*/
  
  
  
  var today = new Date();
  
 if  ((today.getMonth()+1)<10) { moisavec2chiffres = '0'+(today.getMonth()+1) ; } else { moisavec2chiffres = (today.getMonth()+1) ;}
 
 if  (today.getSeconds()<10) { secondesavec2chiffres = '0'+(today.getSeconds()) ; } else { secondesavec2chiffres = today.getSeconds() ;}
 
 if  (today.getMinutes()<10) { minutesavec2chiffres = '0'+(today.getMinutes()) ; } else { minutesavec2chiffres = today.getMinutes() ;}
 
 if  (today.getHours()<10) { heureavec2chiffres = '0'+(today.getHours()) ; } else { heureavec2chiffres = today.getHours() ;}
 
 if  (today.getDate()<10) { jouravec2chiffres = '0'+(today.getDate()) ; } else { jouravec2chiffres = today.getDate() ;}
 
 
  
  var time = today.getFullYear()+'-'+ moisavec2chiffres +'-'+jouravec2chiffres+'&nbsp;&nbsp;&nbsp;&nbsp;'+heureavec2chiffres + ":" + minutesavec2chiffres + ":" + secondesavec2chiffres;
  
  
  document.getElementById("horloge").innerHTML = time;
}