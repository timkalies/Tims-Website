let o, p, q, r, s, t, u, section, editsec;
let clicked = false, case1 = false, case2 = false; //Variable zur abfrage ob Notiz hinzugefügt wurde
let x = 0, y = 0, z = 0, xy = 0, fancy = 0, i = 0; // x = delete, y = edit mehrfach, z = bold, xy = kursiv, fancy = case 
let bold = false, cursive = false;
//----------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
let subDiv = document.querySelector("#textinfo"); //Füg hinzu das bei entfernung eines Formats Text gelöscht wird
let fancy1 = document.getElementById("boldButton");
let fancy2 = document.getElementById("cursiveButton"); });
fancy1 = document.addEventListener("click", function(){
	if (fancy === 0 || fancy === 2) {
		fancy +=1;
		console.log("Text ist fett");
	} else if (fancy === 3) {
		fancy = 2;
		console.log("Text ist kursiv und nichtmehr fett");	
	} else if ( fancy = 1) {
		fancy = 0;
		console.log("Text ist nicht kursiv nicht fett");	
	}
});
fancy2 = document.addEventListener("click", function(){
	if (fancy === 0 ||fancy === 1) {
		fancy +=2;
		console.log("Text ist kursiv");
	} else if ( fancy === 3) {
		fancy = 1;
		console.log("Text ist fett und nichtmehr kursiv"); 
	 } else if (fancy === 2) {
		fancy = 0;
		console.log("Text ist nicht kursiv und nichtmehr fett");	
	 }
	}); 
//----------------------------------------------------------

  
function changeBackgroundColor(){
const colors = ['#FBE0C3', '#D05663', '#64766A', '#8BC6EC'];

const editGrad = ["linear-gradient(135deg, rgba(172,153,10,1) 0%, rgba(186,172,19,1) 35%, rgba(244,241,11,1) 100%)", "linear-gradient(135deg, rgba(213,194,192,1) 0%, rgba(199,33,22,1) 35%, rgba(74,23,6,1) 100%)", "linear-gradient(135deg, rgba(132,149,127,1) 0%, rgba(77,147,83,1) 35%, rgba(9,93,25,1) 100%)", "linear-gradient(135deg, rgba(16,158,235,1) 0%, rgba(19,186,173,1) 35%, rgba(13,95,126,1) 100%)"];

const editBack = ["rgb(148,136,51)", "rgb(213,194,192)", "rgb(132,149,127)", "rgb(16,158,235)"];
var selectedColor = document.getElementById("bgchoice").value;
var editColor = document.getElementById("changediv");
document.body.style.backgroundColor = colors[selectedColor];
editColor.style.backgroundImage = editGrad[selectedColor];
editColor.style.backgroundColor = editBack[selectedColor];

document.documentElement.classList.add('background-change');
console.log("Die Hintergrundfarbe wurde zu " + selectedColor + "geändert");
}

//----------------------------------------------------------

function create() {
let subDiv = document.querySelector("#textinfo"); //Textfeld für regelmäßige Meldungen
event.preventDefault();
s = document.getElementById("textfield").value; //nimmt wert text
o = document.getElementById("timefield").value; //nimmt wert zeit


if ((s == ""|| s == null)&&(o == ""|| o == null)){
  console.log("Leerer Inhalt im Eingabe Feld");
  let subText = document.createElement("p");
	   subText.textContent = "Keine Text- oder Zeiteingabe!";
	   subDiv.style.fontWeight = "bold";
	   subDiv.appendChild(subText);
	   window.setTimeout(subDiv.removeChild(subDiv.firstElementChild), 5000);
  return false;
} else if ((s == ""|| s == null)||(o == ""|| o == null)) {
 console.log("Einzelne Eingabe hat nicht stattgefunden");
 let subText = document.createElement("p");
	  subText.textContent = "Keine Text- oder Zeiteingabe!";
	  subDiv.style.fontWeight = "bold";
	  subDiv.appendChild(subText);
	  window.setTimeout(subDiv.removeChild(subDiv.firstElementChild), 5000);
	  return false;
  }
else {
p = document.createElement("li"); //liste erstellt
q = document.createElement("br"); //linebreak erstellt
r = document.createElement("button"); //button erstellt
var textb = document.createTextNode("Löschen");
    p.textContent = o + ": " + s;
	
	
	section = document.getElementById("notes");
	r.appendChild(textb);
	r.setAttribute('id', 'button02');
	r.setAttribute("onClick", "löschen()");
	p.setAttribute("id", "text02");
	p.addEventListener("click", change1);
	
	if (bold === true && cursive === false) {
    p.style.fontWeight = "bold";
	} else if (cursive === true && bold === false) {
	p.style.fontStyle ="italic";
	} else if (bold && cursive) {
	p.style.fontWeight = "bold";	
	p.style.fontStyle = "italic";
	}
	//dem div elemente hinzufügen
	section.appendChild(p);
	section.appendChild(r);
	section.appendChild(q);

	bold = false; //setzt Bold auf false damit Text nicht dauerhaft Fett ist
	cursive = false;
}
}
//funktioniert nicht
function timeBasedSort(list) {
  while (i > 0) {
  let inputs = document.querySelectorAll("#text02");
  for (i = 0; i < inputs.length; i++) {
   
  }
}
}

//----------------------------------------------------------


function change1() {
  	  event.preventDefault();
  	  editsec = document.getElementById("changediv");
  	  editsec.style.display = "block";
  
}
function change2(){
  event.preventDefault();
    	  t = document.getElementById("textedit").value; //nimmt wert text
    	  u = document.getElementById("timeedit").value;
  
    	  if ((t == "" || t == null) && (u == "" || u == null)) {
    	    console.log("Keine Eingabe im Edit-Input Feld");
    	    editsec.style.display = "none";
    	    return false;
    	  } else if (y === 0) { //Abfrage um zu gucken, ob es erster Edit ist
			if ((t == "" || t == null) && (u == "" || u == null)) {
				console.log("Keine Eingabe im Edit-Input Feld");
				editsec.style.display = "none";
				return false;
			} else {
    	    v = document.createElement("li");
    	    v.textContent = u + ": " + t; 
    	    section.replaceChild(v, p);
    	    editsec.style.display = "none";
			if (bold == true){ //Abfrage um bei Edit Nr.2+ mit bold und cursive zu arbeiten
			v.style.fontWeight = "bold";
			} else if (bold === false && cursive === true) {
				v.style.fontStyle = "italic";
				} else if (bold && cursive){
					v.style.fontWeight = "bold";
				v.style.fontStyle = "italic";
				}
    	    v.addEventListener("click", change1);
    	    y++;
    	    console.log("Erster Edit ausgeführt");
		} } else if (y > 0) { 
    	       v.textContent = u + ": " + t;
    	       section.replaceChild(v, v);
    	       editsec.style.display = "none";
			   if (bold === true && cursive === false){ //Abfrage um bei Edit Nr.2+ mit bold und cursive zu arbeiten
				v.style.fontWeight = "bold";
				} else if (bold === false && cursive === true) {
				v.style.fontStyle = "italic";
				} else if (bold && cursive){
					v.style.fontWeight = "bold";
				v.style.fontStyle = "italic";
				}
    	       v.addEventListener("click", change1);
    	       console.log("Weiterer Edit ausgeführt");
    	  }
  
}

//----------------------------------------------------------

function löschen() {
while(x < 3) {
  section.removeChild(section.firstChild);
  x++;
} 
x = 0;
}
function öffnen() {
 event.preventDefault();
 a = document.getElementById("tools");
 a.style.display = "block";
}
function öffnen_edit() {
	event.preventDefault();
	a = document.getElementById("tools_edit");
	a.style.display = "block";
   }

//----------------------------------------------------------



function fancyText() {
 let subDiv = document.querySelector("#textinfo"); //Textfeld für regelmäßige Meldungen
 let subText = document.createElement("p");
switch(fancy) {
	default:
		console.log("Keine besondere Textgestaltung");
		break;
    case 1:
		z++;
		case1 = true;
		if(z%2===1) {
			bold = true;
			  subText.textContent = "Der Text ist fettgedruckt!";
			  subDiv.style.fontWeight = "bold";
			  subDiv.appendChild(subText);
			  console.log("Text ist fettgedruckt");
			  window.setTimeout(()=>subDiv.removeChild(subDiv.firstElementChild), 5000);
		  } else if (z%2 === 0) {
			bold = false;
			subDiv.removeChild(subDiv.firstElementChild);
			console.log("Check");
		  }
		break;
    case 2:
		xy++;
		if(xy%2===1) {
			cursive = true;
			  subText.textContent = "Der Text ist kursiv!";
			  subDiv.style.fontWeight = "italic";
			  subDiv.appendChild(subText);
			  console.log("Text ist kursiv");
			  window.setTimeout(()=>subDiv.removeChild(subDiv.firstElementChild), 5000);
			} else if (xy%2 === 0) {
			cursive = false;
			subDiv.removeChild(subDiv.firstElementChild);
			console.log("Check");
			}
			break;
	case 3:
           cursive = true; bold = true;
		   subText.textContent = "Der Text ist Fettgedruckt und kursiv!";
		   subDiv.style.fontWeight = "bold";
		   if (case1 || case2){ //checkt ob der Text ersetzt oder kreiert werden muss
		   subDiv.replaceChild(subText, subDiv.firstElementChild);
		   case1 = false, case2 = false;
		   } else {
			subDiv.appendChild(subText);
		   }
		   console.log("Text ist fettgedruckt und kursiv");
		   window.setTimeout(()=>subDiv.removeChild(subDiv.firstElementChild), 5000);
		   break;
}

 }
 
 


//----------------------------------------------------------



//----------------------------------------------------------
document.addEventListener('DOMContentLoaded', function() {
	startTime();
  }); //Startet Uhrzeit sobald Website geladen wird

function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function startTime() {
  let today = new Date();
  let hour = today.getHours();
  let min = today.getMinutes();
  let sec = today.getSeconds();
  // Setzt eine Null vor Zahlen>10
  min = checkTime(min);
  sec = checkTime(sec);
  document.querySelector('#time').innerHTML = hour + ":" + min + ":" + sec;
  time = setTimeout(function() {
    startTime()
  }, 500);
}
//Close Button für Bearbeitungsdiv
document.addEventListener('DOMContentLoaded', function () {
	let c = document.getElementById("editsec");
	let d = document.getElementById("close").addEventListener("click", function(){
		c.style.display = "none";
		});
});
	


