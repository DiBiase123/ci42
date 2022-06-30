<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#EX2 javascript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 <!-- <link rel="stylesheet" href="./css/style.css" >  -->
</head>

  <body>

<div class="p-2 m-2 bg-light bg-gradient rounded">
    <h1 class="text-center text-primary"><u> #JavaScript: Objets et tableaux </u> </h1>
    <p class="text-center text-secondary">Vous devez réaliser un programme permettant de gérer des animaux. </p>

    <div class="text-center">


            <button type="button" class=" btn btn-info btn-lg text-white" onclick="find()" >
            <input type="text" id="find" placeholder="Recercher ... " >

            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
             <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>

            </button>


  <div class="row g-2">
    <div class="col-6">
    <!--   PRIMA COLONNA -->
            <button class="btn btn-info p-2 m-2" id="cane" onclick="seeChien()";>
              <svg xmlns="http://www.w3.org/2000/svg"  width="1.8em" height="1.8em" fill="currentColor" class="bi bi-arrow-repeat rotate align-top" viewBox="0 0 16 16">
                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
              </svg>
                <img src="./ico/chien.png" alt="chien" width="150" height="auto"><h3 class="text-white m-2"> Chien</h3>




            </button>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-success btn-lg text-warning" name="startajouter" onclick="addchien()"> +Ajouter</button>
            </div>
    </div>

    <div class="col-6">
    <!--   SECONDA COLONNA -->
        <button class="btn btn-info p-2 m-2" id="gatto" onclick="seeChat()";>
          <svg xmlns="http://www.w3.org/2000/svg"  width="1.8em" height="1.8em" fill="currentColor" class="bi bi-arrow-repeat rotate align-top" viewBox="0 0 16 16">
            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
          </svg>
            <img src="./ico/chat.png" alt="gatto" width="150" height="auto" > <h3 class="text-white m-2"> Chat </h3>
        </button>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="button" class="btn btn-success btn-lg text-warning" name="startajouter" onclick="addchat()"> +Ajouter</button>
        </div>



    </div>
    <div class="col-6">
      <div class="p-3 border bg-light" id="seechien">Visualizza Cani</div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light" id="see">Visualizza Gatti</div>
    </div>
  </div>
</div>



</div>








<script type="text/javascript" src="./js/ex2_moyen.js"> </script>




</body>
  </html>
