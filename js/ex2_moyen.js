// class Animal {
//   constructor(name) {
//     this.name = name;
//   }
// }
//
document.addEventListener('keydown', function (e)
{
//  console.log(e.keyCode);
    if(e.keyCode == 13)
    {
      e.preventDefault();
      find();
    }
    if(e.keyCode == 46)
    {
      e.preventDefault();

        document.getElementById("find").value ="";

    }
});

class Chien //extends Animal
 {constructor(id,nom , age , sex)
  {
    this.id= chiens.length ,

    this.nom = prompt("Saisir NOM:");
    this.age = prompt("Saisir AGE:");
    this.sex = prompt("Saisir SEX:");
   }
   montreinfo()
   {
    let seechien = document.getElementById("seechien");
    seechien.innerHTML=("</br>"+ Chien.name + ": " + this.nom + "</br><span class='text-success'> +++ Ajouté +++ </span> <br/>");
    seechien.innerHTML+=( "</br><pre>Nom: " + this.nom + "</br>Age: " + this.age + "</br>Sex: " + this.sex + "</pre><br/>");
   }
 }

class Chat //extends Animal
 {constructor(id,nom , age , sex)
  {
    this.id= (chats.length +1) ,
    this.nom = prompt("Saisir NOM:");
    this.age = prompt("Saisir AGE:");
    this.sex = prompt("Saisir SEX");
   }
   montreinfo(chat)
   {
   let see = document.getElementById("see");
    see.innerHTML=( "<h3 class='text-success'> +++ Ajouté +++ \n </h3> <br>" );
    see.innerHTML+=(  Chat.name + "<h5 class='text-start '><br/>Nom: " + this.nom + "<br/>Age: " + this.age + "<br/>Sex: " + this.sex + "</h5>");
   }
 }

var chiens =
[
  chien ={id: 0,nom: "Poli",age: 2,sex: 'Femelle',},
  chien ={id: 1,nom: "Plime",age: 15,sex: "Femelle",},
  chien ={id: 2,nom: "Poupi",age: 7,sex: "Male",}
];

var chats =
[
  chat ={id: 1,nom: "Micia",age: 2,sex: 'Femelle',},
  chat ={id: 2,nom: "Micietta",age: 15,sex: "Femelle",},
  chat ={id: 3,nom: "Micio",age: 7,sex: "Male",}
];

function addchien()
{
  chien = new Chien ();
    chiens.push(chien);
    // console.log('CHIENS = ' + chiens.name + ' ID = ' +  chiens.id + ' Nom = ' + chiens.nom + '</br>');
    console.log(chiens.length + "ELEMENTI IN VAR chien ");
    console.log(chiens);
    chien.montreinfo();

}

function addchat()
{
  chat = new Chat ();
  chats.push(chat);
 // console.log('CHIENS = ' + chiens.name + ' ID = ' +  chiens.id + ' Nom = ' + chiens.nom + '</br>');
  console.log(chats.length + "ELEMENTI IN VAR chat ");
  console.log(chats);
  chat.montreinfo();
}

function seeChat()
{
  var i;
  let seechat = document.getElementById("see");
  seechat.innerHTML= (" **** CHAT **** <br>");

  var bottone = document.createElement("button");
  for (i = 0; i < chats.length; i++)
  {
    bottone.textContent=" EFFACER ? " ;
    bottone.style.background ="red";
  //  bottone.style.text-align="right";


    bottone.style.color =" black";
    bottone.style.padding ="5px";
    bottone.style.margin = "2px";
    bottone.type = 'button';
    bottone.id = chiens[i].id;
    console.log("bottone.id =" + bottone.id);
    seechat.appendChild(bottone).style;
    bottone.setAttribute(`onclick`,'effacerchat(' + i + ')');

  seechat.innerHTML+= ("<br>ID = " + chats[i].id + "</br>");
  seechat.innerHTML+= ("Nome = " + chats[i].nom + "</br>");
  seechat.innerHTML+= ("Age = " +chats[i].age + "</br>");
  seechat.innerHTML+= ("Sex = " +chats[i].sex + "</br>");
  seechat.innerHTML+= ("**********</br>");
  }
}

function seeChien()
{

  var i=0;
  let seechien = document.getElementById("seechien");
  seechien.innerHTML= (" **** CHIEN **** <br>");

  var bottone = document.createElement("button");
  for (i = 0; i < chiens.length; i++)
        {
          bottone.textContent=" EFFACER ?? ";
          bottone.style.background =" red";
          bottone.style.color =" black";
          bottone.style.padding ="5px";
          bottone.style.margin = "2px";
          bottone.type = 'button';
          bottone.id = chiens[i].id;
          console.log("bottone.id =" + bottone.id);
          seechien.appendChild(bottone).style;
          bottone.setAttribute(`onclick`,'effacerchien(' + i + ')');
            seechien.innerHTML+= ("<br>ID = " + chiens[i].id + "</br>");
            seechien.innerHTML+= ("Nome = " + chiens[i].nom + "</br>");
            seechien.innerHTML+= ("Age = " +chiens[i].age + "</br>");
            seechien.innerHTML+= ("Sex = " +chiens[i].sex + "</br>");
            seechien.innerHTML+= ("**********");
            seechien.innerHTML+= ("<br>");
        }
        console.log(chiens.length + "ELEMENTI IN VAR chien ");
}

function effacerchien(id)
{
  let choix = prompt("Vous êtes sûr de vouloir effacer?? // 1: Oui" );
   if (choix == true)
   {
     chiens.splice(id,1);
     seeChien();
   }
   else
   {
      alert(" Annullé ");
      return;
    }
}

function effacerchat(id)
{
  let choix = prompt("Vous êtes sûr de vouloir effacer?? // 1: Oui" );
   if (choix == true)
   {
     chats.splice(id,1);
     seeChat();
   }
   else
   {
      alert(" Annullé ");
      return;
    }
}

function find()
{
  let find = document.getElementById("find");
  console.log(find.value + " FIND ELEMENT");

var i=0;
  for (i = 0; i < chiens.length,chats.length; i++)
  {
  //  console.log(chiens[i].nom + " nom cane")
  //  const element = chiens[i];
    if (find.value == chiens[i].nom)
      {
        let seechien = document.getElementById("seechien");
        seechien.innerHTML= (" +++++ CHIEN +++++ <br>");
        seechien.innerHTML+= ("<br>Nome = " + chiens[i].nom + "</br>");
        seechien.innerHTML+= ("Age = " +chiens[i].age + "</br>");
        seechien.innerHTML+= ("Sex = " +chiens[i].sex + "</br>");
        seechien.innerHTML+= ("++++++++++</br></br>");
        seechien.innerHTML+= ("");

      console.log("Trovato!");
      }
      else if (find.value == chats[i].nom)
      {
      see.innerHTML= (" +++++ CHAT +++++ <br>");
      see.innerHTML+= ("<br>Nome = " + chats[i].nom + "</br>");
      see.innerHTML+= ("Age = " +chats[i].age + "</br>");
      see.innerHTML+= ("Sex = " +chats[i].sex + "</br>");
      see.innerHTML+= ("++++++++++</br></br>");
  }
  console.log(chiens);
}
}
