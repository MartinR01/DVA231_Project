function createCookie(name, value, days) {
var expires;
if (days) {
var date = new Date();
date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
expires = "; expires=" + date.toGMTString();
} else {
expires = "";
}
document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}

function info(id){

  document.getElementById("act").classList.remove('active');
  document.getElementById("act1").classList.remove('active');
  document.getElementById("act2").classList.remove('active');
  document.getElementById("act3").classList.add('active');
    createCookie("journey", id, "10");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajaxprof/infoa.php", true);
  xhttp.send();
}
function activity(){
  document.getElementById("act").classList.add('active');
  document.getElementById("act1").classList.remove('active');
  document.getElementById("act2").classList.remove('active');
  document.getElementById("act3").classList.remove('active');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajaxprof/activity.php", true);
  xhttp.send();
}

function students(id){
  document.getElementById("act").classList.remove('active');
  document.getElementById("act1").classList.remove('active');
  document.getElementById("act2").classList.add('active');
  document.getElementById("act3").classList.remove('active');
  createCookie("journey", id, "10");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajaxprof/students.php", true);
  xhttp.send();
}
function quest(id){
  document.getElementById("act").classList.remove('active');
  document.getElementById("act1").classList.add('active');
  document.getElementById("act2").classList.remove('active');
  document.getElementById("act3").classList.remove('active');

  createCookie("journey", id, "10");

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajaxprof/quest.php", true);
  xhttp.send();
}
function editquest(){
  document.getElementById("act").classList.remove('active');
  document.getElementById("act1").classList.add('active');
  document.getElementById("act2").classList.remove('active');
  document.getElementById("act3").classList.remove('active');
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contain").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "edit_quest/edit_main_quest.php", true);
  xhttp.send();
}
