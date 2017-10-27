
function dashboard(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("stud").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "student/dash.php", true);
  xhttp.send();
}

function journey(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("stud").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "student/journey.php", true);
  xhttp.send();
}
