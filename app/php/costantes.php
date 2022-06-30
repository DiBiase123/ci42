
<h1> Costante </h1>

<div class="accordion" id="accordionCostantes">

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingDEFINE">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDEFINE" aria-expanded="true" aria-controls="collapseDEFINE">
                <blockquote class="mint justify-content-center">
                    <span class="Cmint">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </span>  Définir une constante avec <span class="text-primary"><b> #define </b></span> (dont le nom est par defaut sensible à la casse) 
                </blockquote>
            </button>
        </h2>

        <div id="collapseDEFINE" class="accordion-collapse collapse show" aria-labelledby="headingDEFINE" data-bs-parent="#accordionCostantes">
            <div class="accordion-body">
                <blockquote class="mint justify-content-center">
                                    <table class="table" id="define"> <!-- DEFINE -->
                                        <thead>
                                            <tr class="bg-secondary text-white text-center">
                                                <th scope="col"><span class="text-warning">&lt;?php </span> <span class="text-info"> define</span>('CONSTANTE' , 'valeur de COSTANTE'); <span class="text-warning">?&gt;</span>  </th>
                                                    <?php define( 'CONSTANTE' , 'valeur de COSTANTE' ); ?>
                                                </th>
                                            </tr>
                                            <tbody>
                                                <tr class="bg-light text-dark">
                                                    <td>  <?php echo 'Résultat <br />
                                                    <span class="text-dark"><b>CONSTANTE = ', CONSTANTE ,'</b></span><br />'; ?></td>
                                                </tr>
                                            </tbody>
                                        </thead>
                                    </table> 

                                    <table class="table" id="const"> <!-- DEFINE complexe -->
                                        <thead>
                                            <tr class="bg-secondary text-white text-center">
                                                <th scope="col" class="text-white"> Utilisation d'une expressione complexe <br /> 
                                                    <span class="text-warning">&lt;?php</span> <span class="text-info"> define </span> ('ENCORE_UNE_CONSTANTE',SHA1(uniqid(rand()))); <span class="text-warning"> ?&gt; </span>
                                                        <?php define('ENCORE_UNE_CONSTANTE',SHA1(uniqid(rand()))); ?> <!-- SHA1 Cryptage donne + uniqid() Funciont Ientifiant unique + rand() Funciont Random -->
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-light text-dark">
                                                <td> 
                                                    <?php echo 'Résultat <br />
                                                            <b>ENCORE_UNE_CONSTANTE = ' , ENCORE_UNE_CONSTANTE, '</b><br />'; 
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>     
                                        <p>
                                            La fonction <strong class="text-primary"> define </strong> permet de définir une constante. <br /> Une costante est une zone mémoire identifiée par un nom qui contient une valeur lisible mais <strong> NON MODIFIABLE </strong> dans le programme.
                                            <br />

                                        <p>
                                            Une fois créé, une costante n'est plus modifiable, ni per un nouvel appel à <strong class="text-primary"> define </strong> , ni par un affectation directe.
                                        </p>

                                        <p>
                                            La valeur de la costante peut être définie à l'aide d'une expression qui utilise des valeurs  <strong> "LiTtérAls°, </strong> des <strong class="text-primary"> COSTANTES, </strong> des <strong class="text-success"> $variables, </strong> des opérateurs (<strong> ++ -- && !- </strong>) ou des appels de <strong class="text-primary">fonctions() </strong>
                                        </p>

                                        <p>
                                        Traditionnellment, le noms des costantes son définis en majuscles et la <strong > portée d'une costante  </strong>
                                        est le script dans lequel elle est définie, peut donc être définie dans une première section de code PHP et utilisée dans une autre section de code PHP du même script.
                                        </p>
                </blockquote>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCONST">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCONST" aria-expanded="false" aria-controls="collapseCONST">
                    <blockquote class="due justify-content-center">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        </span> Défir une constante avec <span class="text-primary"><b>#const </b></span>(depuis 5.3) 
                    </blockquote>
                </button>
            </h2>

            <div id="collapseCONST" class="accordion-collapse collapse" aria-labelledby="headingCONST" data-bs-parent="#accordionCostantes">
                <div class="accordion-body">
                    <blockquote class="due justify-content-center">
                        <table class="table" id="const"> <!-- CONST -->
                            <thead>
                                <tr class="bg-secondary text-white">
                                    <th scope="col"><span class="text-warning">&lt;?php </span> <span class="text-info"> const</span> UNE_AUTRE_CONSTANTE =  'PHP 7.0'; <span class="text-warning">?></span>  </th>
                                    <?php const UNE_AUTRE_CONSTANTE =  'PHP 7.0'; ?>
                                </tr>
                                <tbody>
                                    <tr class="bg-light text-dark">
                                        <td>  <?php echo 'Résultat <br />
                                        <span class="text-dark"><b>UNE_AUTRE_CONSTANTE = ', UNE_AUTRE_CONSTANTE ,'</b></span><br />'; ?></td>
                                    </tr>
                                </tbody>
                            </thead>
                        </table>       

                        <table class="table" id="const"> <!-- CONST complexe -->
                                <thead>
                                    <tr class="bg-secondary text-white">
                                        <th scope="col" class="text-white"> Utilisation d'une expressione complexe <br /> 
                                            <span class="text-warning">&lt;?php</span> <span class="text-info"> const </span> UNE_DERNIER_CONSTANTE = UNE_AUTRE_CONSTANTE . ' (nouveau) ' ; <span class="text-warning"> ?> </span>                                
                                                <?php const UNE_DERNIER_CONSTANTE = UNE_AUTRE_CONSTANTE . ' (nouveau) ' ;?> 
                                        </th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr class="bg-light text-dark">
                                            <td> 
                                                <?php echo 'Résultat <br />
                                                        <b>UNE_DERNIER_CONSTANTE = ' , UNE_DERNIER_CONSTANTE, '</b><br />'; 
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                        </table>     
                                        
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
