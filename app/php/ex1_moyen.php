<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#EX1 javascript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 <!-- <link rel="stylesheet" href="./css/style.css" >  -->
</head>


<body>
    
    
    <div class="p-2 m-2 bg-light bg-gradient rounded" >
   
            <h1 class="text-center text-primary"> #JavaScript: Tableau </h1>
            <p class="text-secondary text-center">Vous devez créer un programme permettant de compléter un tableau de chiﬀres. Lorsque l’on saisit un chiﬀre, il est écrit directement à la bonne place aﬁn de de conserver un tableau trié. </p>

        <p>A = Ajouter un chiffre </p>
        <p>B = Afficher le tableau </p>
        <p>C = Trie le tableau + ASC</p>
        <p>D = Trie le tableau - DES</p>
        <p>Quels est votre choix ?</p>

                <input type="text" id="valeur" placeholder="Faire votre choix.." autofocus > </input>
                <button class="btn btn-primary" onclick="submit()">Envoyer</button>
                <button class="btn btn-warning" onclick="supprimer()">Effacer</button>
                

    <br />

    <section ><br />
      <p class="text-white bg-secondary border border-info b" id="ajouter"> </p>
    </section>

    </div>

  <script type="text/javascript" src="./js/ex1_moyen.js"> </script>

  </body>
</html>