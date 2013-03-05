function DateHour(){
	if (!document.all&&!document.getElementById)
		return;
	thelement=document.getElementById? document.getElementById("datehour"): document.all.datehour;

var date = new Date();
var hour=date.getHours();
var minute=date.getMinutes();
var seconds=date.getSeconds();
if (minute<10)
	minute="0"+minute;
if (seconds<10)
	seconds="0"+seconds;
		

var days = new Array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato');

// Array list of months.
var months = new Array('Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre');

// Calculate the number of the current day in the week.
var weekday = ((date.getDate()<10) ? "0" : "")+ date.getDate();

// Calculate four digit year.
var year = date.getFullYear();
								

// Join it all together
today =  days[date.getDay()] + " " +
         weekday + " "+
		 months[date.getMonth()] + " " +
		 year ;

time = 	hour + ":" +
		minute + ":" +
		seconds;

	var TT=today + " " + time;
	thelement.innerHTML=""+TT+"";
	setTimeout("DateHour()",1000);
}

window.onload=DateHour