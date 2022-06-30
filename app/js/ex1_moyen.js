tab = [3 , 8 , 10, 15];
document.getElementById("valeur").value ="";

function submit()
{
    let scelta = document.getElementById("valeur");
    let ajouter = document.getElementById("ajouter");

    console.log(scelta.value + "scelta");

    switch(scelta.value)
        {
            case "A":
            case "a":

                for (let i=0; i<=(tab.length); i++)
                {
                    var nombre1 = prompt("\n **Saisir le nombre da ajouter :\n **Saisir \"EXIT\" pour sortir or press ESC");
                    console.log(nombre1 + " nombre1 ");

                    if (nombre1 == null || nombre1 =="exit" || nombre1 =="EXIT" || nombre1 =="Exit")
                    {
                      return;
                    }
                    else
                    {
                        var nb = tab.push(nombre1);
                        ajouter.innerHTML= ("</br><p class='text-center'>*** Ajouter ***</p>");
                        ajouter.innerHTML+= (tab.join());
                    }
                }
                break;
            case "B" :
            case "b" :
                //console.log("Tabella");
                ajouter.innerHTML= ("</br><p class='text-center'>*** Affiche ***</p>");
                ajouter.innerHTML+= ("<p class='text-center'>||" + tab.join()+ "||</p>");
                break;

            case "C" :
            case "c" :
                //console.log("TRIE ASC = ***** ");
                var byValue = (a,b) => a - b;
                var sorted = [...tab].sort(byValue).join();
                ajouter.innerHTML= ("</br><p class='text-center'>*** Trie -> ASC ***</p>");
                ajouter.innerHTML+= ("<p class='text-center'>|| " + sorted + " ||</p>");
                break;

            case "D" :
            case "d" :
                //console.log("TRIE DES = ***** ");
                var byValue = (a,b) => b - a;
                var sorted = [...tab].sort(byValue).join();
                ajouter.innerHTML= ("</br><p class='text-center'>*** Trie <- DES ***</p>");
                ajouter.innerHTML+= ("<p class='text-center'>|| " + sorted + " ||</p>");
                break;

            default:
            alert("<h3 class='text-center'> !! Non in lista !! </h3>");
            console.log("Non in lista");
        }
}

document.addEventListener('keydown', function (e)
{
//  console.log(e.keyCode);
    if(e.keyCode == 13)
    {
      e.preventDefault(); 
      submit();
    }
    if(e.keyCode == 46)
    {
      e.preventDefault();

        document.getElementById("valeur").value ="";

    }
});

function supprimer() {
    console.log('Effacé');
    document.getElementById("valeur").value = "";
  }
