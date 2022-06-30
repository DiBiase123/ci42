
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var risposta1 = document.getElementById("risposta1");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
document.getElementById("message").style.display = "block";
}
// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
document.getElementById("message").style.display = "none";
}
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
// Validate lowercase letters
var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters))
  {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
    var chekp1 = true;
    //console.log(chekp1 + "<=  chekp1");
  }
  else
  {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
    var chekp1 = false;
    //console.log(chekp1 + "<=  chekp1");
  }
// Validate capital letters
var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters))
    {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
    var chekp2 = true;
    //console.log(chekp2 + "<=  chekp2");
    }
  else
    {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
    var chekp2 = false;
    //console.log(chekp2 + "<=  chekp2");
    }

// Validate numbers
var numbers = /[0-9]/g;
  if(myInput.value.match(numbers))
    {
    number.classList.remove("invalid");
    number.classList.add("valid");
    var chekp3 = true;
    //console.log(chekp3 + "<=  chekp3");
    }
  else
    {
    number.classList.remove("valid");
    number.classList.add("invalid");
    var chekp3 = false;
    //console.log(chekp3 + "<=  chekp3");
    }

// Validate length
  if(myInput.value.length >= 8)
    {
    length.classList.remove("invalid");
    length.classList.add("valid");
    var chekp4 = true;
    //console.log(chekp4 + "<=  chekp4");
    }
  else
    {
    length.classList.remove("valid");
    length.classList.add("invalid");
    var chekp4 = false;
    //console.log(chekp4 + "<=  chekp4");
    }
// Validate all
  if (chekp1==true && chekp2 ==true && chekp3 ==true && chekp4==true )
    {
      risposta1.style.backgroundColor ="lightgreen";
      risposta1.innerHTML=("Password ok");
      let checkpass="ok";
      //console.log("checkpass =" + checkpass);
    }
    else
    {
      risposta1.innerHTML=("Password failed");
      risposta1.style.backgroundColor ="orange";
      //console.log("check failed")  ;
      checkpass="failed";
    }
}