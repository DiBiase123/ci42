
var username = document.getElementById("username");
var risposta = document.getElementById("risposta");
var checkusr = document.getElementById("checkusr");

// When the user clicks on the password field, show the message box
username.onfocus = function()
{document.getElementById("risposta").style.display = "block";}
// When the user clicks outside of the password field, hide the message box
username.onblur = function()
{document.getElementById("risposta").style.display = "none";}
// When the user starts to type something inside the password field
username.onkeyup = function()
{
// Validate lowercase letters
//var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var validRegex = /^[a-zA-Z0-9_'-]{1}[a-zA-Z0-9._'-]*([^.]@[^._])([a-zA-Z0-9_.'-])+[.]{1}[a-zA-Z0-9_'-]{2,}$/;

  if(username.value.match(validRegex))
    {
      checkusr.classList.remove("invalid");
      checkusr.classList.add("valid");
      var chek = true;
      //console.log(chek + "<=  chek");
    }
  else
    {
      checkusr.classList.remove("valid");
      checkusr.classList.add("invalid");
      var chek = false;
      //console.log(chek + "<=  chek");
    }

  if (chek==true)
    {
      risposta.style.backgroundColor ="lightgreen";
      risposta.innerHTML=("E-mail ok");
      let checkuser="ok";
      //console.log("checkpass =" + checkuser);
    }
    else
    {
    risposta.style.backgroundColor ="orange";
    risposta.innerHTML=("E-mail failed");
    //console.log("E-mail failed");
    checkuser="failed";
    }
}