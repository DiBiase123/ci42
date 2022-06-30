<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="./css/mdb.min.css" >

    <title>EX3 Login Banque</title>
  </head>
  <style>

    /* The message box is shown when the user clicks on the password field */
    #message {
      display:none;
    }
    #risposta {
      display:none;
    }
    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
      color: green;
    }

    .valid:before {
      position: relative;
      left: -35px;
      content: "✔";
    }
    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
      color: red;
    }

    .invalid:before {
      position: relative;
      left: -35px;
      content: "✖";
    }
  </style>



  <body>

<div class="limiter">
  <div class="container-violet">
    <div class="wrap-login col-6 text-center">
        <h1 class="display-1 text-center" style="font-weight:900; text-shadow: 2px 2px 5px grey;"> CHAR-ID <span class="badge badge-primary" style="font-weight:450; text-shadow: 2px 2px 5px black;"> .1.0.1</span></h1>
        <div class="container">
          <p>Bienvenue !<br>
          Créer un compte: </p>
        </div>

            <form method="post" id="myForm">
              <div class="col">
                <input type="text" id="username" placeholder="E-mail ou n° de téléphone" name="username" maxlength="50" required autocorrect="off" spellcheck="false"></div>
                    <br>

                    <div class="col">
                      <input type="password" id="psw" placeholder="Mot de passe" name="psw" required autocorrect="off" spellcheck="false">
                    
                      <!-- <span class="view-password-button">
                          <i class="show-password fas fa-eye"></i>
                          <i class="hide-password hide fa-eye-slash"></i>
                      </span>
                      <span class="caps-lock-indicatore hide">
                          <i class="fas fa-arrow-alt-square-up"></i>
                      </span>  -->
                      <br>

                      <button type="submit" class="btn btn-primary" name="inscription"  onclick="validateForm()" >S'enregistrer</button>
                      <br>

                      <div class="thirdparty-line">
                          <br>
                          <span>
                              Vous avez déjà un compte ? <br> - <a href="./login.html"> Me connecter - </a>
                          </span>
                      </div>
                      <br>

                        <div>
                            <ul class="list-unstyled" id="help-links">
                                <li id="loginSupport" rel="internal"> <a href="mailto:dibiasecompany@gmail.com">Impossible de se connecter ?</li></a>
                            </ul>
                        </div>

                      <div class="p-2 m-2 " id="risposta">
                        <p id="checkusr" class="invalid">Il <b>faut</b> entrer "@" et un "."</p>
                      </div>

                      <div class="p-2 m-2" id="risposta1">
                        <div id="message" class="text-start m-2 p-2 container">
                          <p style="color:grey"><b><u>Password must contain the following:</b></u></p>
                          <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                          <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                          <p id="number" class="invalid">A <b>number</b></p>
                          <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                      </div>

                    </div>

              </div>
            </form>
      </div>
    </div>
</div>

<script src="js/validateUsername.js"> </script>

<script src="js/vaidatePassword2.js"> </script>



  </body>
</html>