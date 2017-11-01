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

function levels(){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("skills").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "game/gameskill.php", true);
    xhttp.send();
}

function boost(id){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("skills").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "game/boost.php", true);
    xhttp.send();
}

function questp(id){

      createCookie("questp", id, "10");
      boost(id);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("questp").innerHTML =
        this.responseText;

      }
    };
    xhttp.open("GET", "game/qplay.php", true);
    xhttp.send();
}

function form_home() {
  document.getElementById("sendtopro").submit();
 }
