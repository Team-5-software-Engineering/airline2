document.getElementById("password").onblur = function() {pcheck()};
function pcheck() {
  var p1=form.password.value;
  if(p1=""){
    document.getElementById("p1").innerHTML = "Please type a password!"; 
  }
}