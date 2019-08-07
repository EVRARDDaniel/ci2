var startTime = 0
var start = 0
var end = 0
var diff = 0
var timerID = 0
function chrono(){
	end = new Date()
	
	diff = end - start //diff1 est bel et bien un timestamp
	
	diff = new Date(diff) //diff est bel et bien une date en partant de 1970... auquel on ajoute le timestamp diff1
	
	//console.log(diff)
	
	var msec = diff.getMilliseconds()
	var sec = diff.getSeconds()
	var min = diff.getMinutes()
	var hr = diff.getHours()-1
	
	//var jour = diff.getDate();
	
	if (hr < 10){
		hr = "0" + hr
	}
	if (min < 10){
		min = "0" + min
	}
	if (sec < 10){
		sec = "0" + sec
	}
	if(msec < 10){
		msec = "00" +msec
	}
	else if(msec < 100){
		msec = "0" +msec
	}
	document.getElementById("chronotime").innerHTML = hr + ":" + min + ":" + sec + ":" + msec //jour +"   "+
	document.getElementById("chronotimebutton").innerHTML = hr + ":" + min + ":" + sec // + ":" + msec 
	
	timerID = setTimeout("chrono()", 100)  // initialement 10
}
/*		<span id="chronotime">0:00:00:00</span>
		<form name="chronoForm">
		<input type="button" name="startstop" value="start!" onClick="chronoStart()" />
		<input type="button" name="reset" value="reset!" onClick="chronoReset()" />				
		</form>		*/


function chronoStart(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	document.chronoForm.reset.onclick = chronoReset
	start = new Date()
	
	chrono()
}

function chronoStartParam(p){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	document.chronoForm.reset.onclick = chronoReset
	start = new Date(p)
	
	chrono()
}




function chronoStartButton(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	document.chronoForm.reset.onclick = chronoReset
	start = new Date() // start est une date bien formée, formatéé
	
	timestamp = start.getTime()
		
	insertcigarette2(timestamp)
	
	
	chrono()
}


function chronoContinue(){
	document.chronoForm.startstop.value = "stop!"
	document.chronoForm.startstop.onclick = chronoStop
	document.chronoForm.reset.onclick = chronoReset
	start = new Date()-diff
	start = new Date(start)
	chrono()
}
function chronoReset(){
	document.getElementById("chronotime").innerHTML = "0:00:00:000"
	document.getElementById("chronotimebutton").innerHTML = "0:00:00:000"
	start = new Date()
}
function chronoStopReset(){
	document.getElementById("chronotime").innerHTML = "0:00:00:000"
	document.getElementById("chronotimebutton").innerHTML = "0:00:00:000"
	document.chronoForm.startstop.onclick = chronoStart
}
function chronoStop(){
	document.chronoForm.startstop.value = "start!"
	document.chronoForm.startstop.onclick = chronoContinue
	document.chronoForm.reset.onclick = chronoStopReset
	clearTimeout(timerID)
}