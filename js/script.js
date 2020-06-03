// JS voor registratie stappen

function volgende1() {
  var div1 = document.getElementById("Div1");
  var div2 = document.getElementById("Div2");

  if (div1.style.display === "none") {
    div1.style.display = "block";
    div2.style.display = "none";
  } else {
    div1.style.display = "none";
    div2.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function terug1() {
  var div1 = document.getElementById("Div1");
  var div2 = document.getElementById("Div2");

  if (div2.style.display === "none") {
    div2.style.display = "block";
    div1.style.display = "none";
  } else {
    div2.style.display = "none";
    div1.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function volgende2() {
  var div3 = document.getElementById("Div3");
  var div2 = document.getElementById("Div2");

  if (div2.style.display === "none") {
    div2.style.display = "block";
    div3.style.display = "none";
  } else {
    div2.style.display = "none";
    div3.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function terug2() {
  var div3 = document.getElementById("Div3");
  var div2 = document.getElementById("Div2");

  if (div3.style.display === "none") {
    div3.style.display = "block";
    div2.style.display = "none";
  } else {
    div3.style.display = "none";
    div2.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function volgende3() {
  var div3 = document.getElementById("Div3");
  var div4 = document.getElementById("Div4");

  if (div3.style.display === "none") {
    div3.style.display = "block";
    div4.style.display = "none";
  } else {
    div3.style.display = "none";
    div4.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function terug3() {
  var div3 = document.getElementById("Div3");
  var div4 = document.getElementById("Div4");

  if (div4.style.display === "none") {
    div4.style.display = "block";
    div3.style.display = "none";
  } else {
    div4.style.display = "none";
    div3.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function volgende4() {
  var div5 = document.getElementById("Div5");
  var div4 = document.getElementById("Div4");

  if (div4.style.display === "none") {
    div4.style.display = "block";
    div5.style.display = "none";
  } else {
    div4.style.display = "none";
    div5.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

function terug4() {
  var div5 = document.getElementById("Div5");
  var div4 = document.getElementById("Div4");

  if (div5.style.display === "none") {
    div5.style.display = "block";
    div4.style.display = "none";
  } else {
    div5.style.display = "none";
    div4.style.display = "block";
    window.scrollTo({top: 0,behavior: 'smooth'});
  }
}

// info-popup

var toon = function (elem) {
	elem.classList.add('toondiv');
};

var verberg = function (elem) {
	elem.classList.remove('toondiv');
};

var toggle = function (elem) {
	elem.classList.toggle('toondiv');
};

document.addEventListener('click', function (event) {

	if (!event.target.classList.contains('toggle')) return;
	event.preventDefault();
	var content = document.querySelector(event.target.hash);
	if (!content) return;
	toggle(content);

}, false);

// Info-pagina

function overmiauwer() {
  var elmnt = document.getElementById("overmiauwer");
  elmnt.scrollIntoView({ behavior: 'smooth'});
}
function katnodig() {
  var elmnt = document.getElementById("katnodig");
  elmnt.scrollIntoView({ behavior: 'smooth'});
}
function katgevonden() {
  var elmnt = document.getElementById("katgevonden");
  elmnt.scrollIntoView({ behavior: 'smooth'});
}
function inorde() {
  var elmnt = document.getElementById("inorde");
  elmnt.scrollIntoView({ behavior: 'smooth'});
}
function totop() {
  window.scrollTo({
  top: 0,
  behavior: 'smooth'
});
}

// Profiel wijzigen

function profielfotopreview() {
 var Huidigefoto = document.getElementById('profielfoto');
 var Previewfoto = document.getElementById('profielfotopreview');
 var Gekozenbestand    =  document.getElementById('gekozenbestand').files[0];
 var Leesfoto  =  new FileReader();
 Leesfoto.onloadend = function () {
    Previewfoto.style.backgroundImage  = "url("+ Leesfoto.result+")";
  }
 if (Gekozenbestand) {
    Leesfoto.readAsDataURL(Gekozenbestand);
  } else {
     Previewfoto.style.backgroundImage  = "";
  }
}
