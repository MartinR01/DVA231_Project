function infoe(){

  document.getElementById("act2").classList.remove('active');
  document.getElementById("act3").classList.remove('active');
  document.getElementById("act1").classList.add('active');

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "edit_journey/edit_info.php", true);
  xhttp.send();
}

function studentse(){

  document.getElementById("act2").classList.remove('active');
  document.getElementById("act3").classList.add('active');
  document.getElementById("act1").classList.remove('active');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "edit_journey/edit_student.php", true);
  xhttp.send();
}
function queste(){
  document.getElementById("act2").classList.add('active');
  document.getElementById("act3").classList.remove('active');
  document.getElementById("act1").classList.remove('active');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "edit_journey/edit_quest.php", true);
  xhttp.send();
}
function editquest(){

  document.getElementById("act2").classList.add('active');
  document.getElementById("act3").classList.remove('active');
  document.getElementById("act1").classList.remove('active');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "edit_quest/add_quest.php", true);
  xhttp.send();
}

function addjourney(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log("success");
    }
  };
  xhttp.open("GET", "php/add_journey.php", true);
  xhttp.send();
}

function form_assist() {
   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	  console.log($("#idprof").value());
	  
    if (this.readyState == 4 && this.status == 200) {
		console.log("success");
    }
  };
  xhttp.open("GET", "php/addassiste.php?idprof=", true);
  xhttp.send();
  }
