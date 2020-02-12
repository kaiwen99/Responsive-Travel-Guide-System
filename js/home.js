var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function currentDiv(n) {
  showDivs(slideIndex = n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("hide-display");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
function Myalert(){
  alert("Please Sign in to Continue!");
}
function ValidateEmail(inputText)
{
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(inputtext=""){
    alert("Insert email address to subscribe.")
  }
  else{
    if(inputText.value.match(mailformat))
    {
      alert("Thanks for subscribe!")
      return true;
    }
    else
    {
      alert("You have entered an invalid email address!");
      return false;
    }
  }
  }
