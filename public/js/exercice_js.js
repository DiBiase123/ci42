function getEx1(somma)
{


var a=1;
var b=5;

  let ex1 = document.getElementById("ex1");
  let p = document.createElement("p");
    p.innerHTML=("------- AVANT Inversion ------------");
    p.innerHTML+=("<pre>Variable a = " + a + "</br>" + "\nVariable b = " + b + "</pre>");
    sectionex1.appendChild(p);


  a=5;
  b=1;

  p = document.createElement("p");
  p.innerHTML=("------- Après Inversion ------------")
  p.innerHTML+=("<pre>Variable a = " + a + "</br>" + "\nVariable b = " + b + "</pre>");
  sectionex1.appendChild(p);

}


function getVar(nom,age,homme)
{
var nom = "toto";
var age = 30;
var homme = true
alert("\n Nom :" + nom + "\n Age :" + age + "\n Sex :" + homme);
}

function getParam(nombre1,nombre2)
{
  alert("Choisissez le nombre et la puissance");
  var nombre1 = prompt("Saisir 1er nombre da elever");
  var nombre2 = prompt("Saisir 2eme nombre ++ PUISSANCE");
  var resultat =0;
  resultat = Math.pow(nombre1, nombre2)
  alert("Le numero " + nombre1 + " elevé à la puissance de " + nombre2 + " =  " + resultat);
}


function getUtent(nom,prenom,age)
{
  var nom = prompt("Saisir votre Nom :");
  var prenom = prompt("Saisir votre Prenom :");
  var age = prompt("Saisir votre Age :");
  var resultat =0;

  resultat = String(nom + " " + prenom + " " + age)
  alert("++++++++++++++++++++ \n++++ BENVENUTO ++++ \n++++++++++++++++++++ \n Votre nom est :" + nom + "\n Votre prenom est : " + prenom + " \n Votre age est : " + age + "\nString =" + resultat);
}

function getTabmult(nombre3)
{
  alert("+++ Table de multiplication ++++ Vx");
  var nombre3 = prompt("Saisir 1er nombre pour sa table de multiplication");
  var resultat = 0;
  let i=1;

  for (i=1; i<11; i++)
  {
    resultat = nombre3*i;

    window.confirm(nombre3 + " * " + i + " = " + resultat);
    console.log(nombre3 + " * " + i + " = " + resultat);
  }
}

function getCheckform()
{
    //je recupere le text saisit dans le formulaire
    var nombre4 = document.getElementById('saisirNom').value;

    if (isNaN(nombre4))
    {
      alert( "Not a number!");
    }
    else if (nombre4.length === 0)
    {
      alert("Inserire un valore");
      console.log(nombre4.length === 0)
    }
    else
    {
      alert("Félicitations!!!  Tu est le " + nombre4 + " gagnant");
    }
    return;
}

function getModul(nombre5)
{
  alert("+++ Modul +++");
  var nombre5 = prompt("Saisir 1er nombre");
  var resultOfMod = nombre5 % 3;
  var resultat = nombre5 / 3;

  if (resultOfMod == 0)
  {
    alert( "Nombre divisible pour 3");
    alert(" Le resultat de " + nombre5 + " / 3 = " + resultat );
  }
  else if (resultat != 0)
  {
    alert("La chiffre " + nombre5 + " n'est pas divisible pour 3");
  }
   return;
}

function getChar(str)
{
  alert("+++ Nombre caractères +++");
  var str = prompt("Saisir le mot à verifier : ");

  console.log(`${str} ${str.length}`);

  if (`${str.length}` < 8)
  {
    alert('Désolé. Min 8 character');
  }
  else
  {
    alert("Le mot " + ` ${str} ` + " contient "  + ` ${str.length} ` + " caractères ");
  }
}

function getInfobjet(str)
{
  var voiture =
  {
    immatriculation : "AB1234CD",
    marque : "Peugeot 205 GTX",
    anne : 1992,
    carac :
    {
      nbKilometre : 40000,
      couleur : "noire",
      puissance : 5
    }
  }
  alert("++++ VOTRE VOITURE : \n" +
    "La voiture d'immatriculation : " + voiture.immatriculation + "\nde marque " +
   voiture.marque + "," + " date de " + voiture.anne + ", \n nombre de kilomètres :" + voiture.carac.nbKilometre + ", \n couleur : " + voiture.carac.couleur  );
}

function getSaisi(nom1,prenom1,age1)
{
  var nom1 = prompt("Saisir votre Nom :");
  var prenom1 = prompt("Saisir votre Prenom :");
  var age1 = prompt("Saisir votre Age :");
  var resultat =0;


  resultat = String(nom + " " + prenom + " " + age)
  alert("++++++++++++++++++++ \n++++ BENVENUTO ++++ \n++++++++++++++++++++ \n Votre nom est :" + nom + "\n Votre prenom est : " + prenom + " \n Votre age est : " + age + "\nString =" + resultat);
}

function getModbalis()
{
  document.getElementById("change\\bon").innerHTML = "<h2 align=center color=#00CC00> " + "\" Bonjour Résurgence ”</h2>";
}

function checkFilled() {
  var inputVal1 = document.getElementById("colornom");
  var inputVal2 = document.getElementById("colorprenom");

    if (inputVal1.value == "" )
    {
        inputVal1.style.backgroundColor = "yellow";
    }
      else
      {
          inputVal1.style.backgroundColor = "";
      }
      if (inputVal2.value == "" )
      {
          inputVal2.style.backgroundColor = "red";
      }
        else
        {
            inputVal2.style.backgroundColor = "";
        }

}
checkFilled();

var x=0
function incrementer()
{
x = x+1;
document.getElementById('nb').innerHTML = x;
}

var x=0
function incrementer10()
{
x = x+10;
document.getElementById('nb').innerHTML = x;}

function azzerer()
{
  x=0;
  document.getElementById('nb').innerHTML = x;
}

function getTabmult1(nombre3)
  {
  alert("Clearlist + Focus section // modificare l'alert");
  let masection = document.getElementById("masection");
  alert("+++ Table de multiplication ++++ V2");
  var nombre3 = prompt("Saisir 1er nombre pour sa table de multiplication");
  var resultat = 0;
  let i=1;

  for (i=1; i<11; i++)
  {
    resultat = nombre3*i;
    let p = document.createElement("p");
    p.innerHTML= nombre3 + " * " + i + " = " + resultat;

  masection.appendChild(p);
  console.log(resultat);

  }
  clearInterval;
}

function getPile(nombre3)
  {
    alert("@@@ En chargment ...");
    function getRandomInt(max)
    {

      return Math.floor(Math.random() * max);
    }

      let risultato=(getRandomInt(20));

      if (risultato <=7)
        {
          alert(" Petit ;( "  + risultato);
          //console.log(" Petit ;( "  + risultato);
        }
        else if (risultato >7 && risultato<15)
        {
          alert(" Moyen ;| "  + risultato);
          //console.log(" Moyen ;| "  + risultato);
        }
      else
        {
          alert("Grande :D " + risultato);
          //console.log("Grande :D " + risultato);
        }
    }

function funzionelati()
  {
      var x = document.getElementById('text');
      for (let i in document.getElementsByName("Pile"))
      {
          if (document.getElementsByName("Pile")[i].checked)
      x.value = document.getElementsByName("Pile")[i].value;
      }
        choix = x.value;
        let pilesection = document.getElementById("pilesection");
        let a = Math.random(2);
        let p = document.createElement("p");
        let risultato = Boolean;

          if (choix=="Pile" && a<0.5)
          {
            risultato = "WIIIIN";
            alert(" ++++ " + risultato + " :D ++++ \nChoix : " + choix + "\nValor : " + a );

          }
            else if (choix=="Pile" && a>=0.5)
            {
              risultato = "LOSE :(";
              alert(" ----" + risultato + " :( ---- \nChoix : " + choix + "\nValor : " + a);
            }
          else if (choix=="Face" && a>=0.5)
            {
              risultato = "LOSE :(";
              alert(" ----" + risultato +" :( ---- \nChoix: " + choix + "\nValor : " + a);
            }
              else
              {
                risultato = "WIIIIIN";
                alert(" ++++ " + risultato + " :D ++++ \nChoix : " + choix + "\nValor : " + a );
              }

              p.innerHTML= (" **** " + risultato + " **** \nChoix : " + choix + "\nValor : " + a );
              pilesection.appendChild(p);
  }

function getTroi(result)
{
  do
  {
    let result = prompt("Saisir le chiffre 3 and confirmer");
    if (result == 3 )
      {
      alert("Bravo! Vous avez saisi un 3");
      return;
      }
      else
      {
        alert("Chiffre inséré : " + result + "\nVous n'avez pas saisi le bon chiffre...");
      }
  }
  while (result != 3);
}

function getAdditionner()
{
  let additionner = document.getElementById("additionner");

  var tab = [2, 6, 10, 3, 8, 7, 20];
  var i=0;
  var somma = 0;

  for (i=0; i<(tab.length) ; i++)
  {
    let resultposi = 0;
      if (resultposi = tab[i] % 2)
      {
        somma = somma;
        let p = document.createElement("p");
        p.innerHTML= (" iteration : " + i + " =  n'est pas paire");
        additionner.appendChild(p);
      }
      else
        {
          let p = document.createElement("p");
          somma = tab[i] + somma;
          p.innerHTML= (" iteration : " + i + " = " + somma);
          additionner.appendChild(p);
        }
  }
  let p = document.createElement("p");
  p.innerHTML= ("Totale = \n" + somma + "</br></br>");
  additionner.appendChild(p);
  window.scrollTo(0, 3000);
}

function getPersonagge()
  {
    var tab = [];
      alert("Inserimento = ***** ");
      var nombre1 = prompt("** Saisir le nom : ");
      console.log("Nom " +nombre1+ " ajouté");
      var nombre2 = prompt("** Saisir l'age : ");
      console.log("Age " +nombre2+ " ajouté");

      alert("\nNom :" + nombre1 + "\n Age :" + nombre2);
  }
