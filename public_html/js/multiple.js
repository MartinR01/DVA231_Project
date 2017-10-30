var counter = 1;

var limit = 20;

function addInput(divName){

     if (counter == limit)  {

          alert("Reached limit " + counter + " for adding students ");

     }

     else {

          var newdiv = document.createElement('div');
          newdiv.setAttribute("id", counter+"");

          newdiv.load('../php/tests');

          document.getElementById(divName).appendChild(newdiv);

          counter++;

     }

}
function delete1(){

  if(counter>1){
  counter = counter -1;
   var n =document.getElementById(counter+"");
      n.parentNode.removeChild(n);

}else{
  alert("Can't delete!")
}

}
