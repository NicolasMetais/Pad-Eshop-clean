<!DOCTYPE html>
<html>
        <?php include("../constructor/head.php"); ?>
    <body>
        <?php include("../constructor/menu.php"); ?>

                            
                <div id="all">
                  
                        <div class = "info-article">

                            <div class = "image-produit-div">
                                <div class = "image-produit-grand">
                                    <img src="../imageBDD/shorty.jpg" id="image-produit" alt="TrucMachin">
                                    <div class = "image-produit-petit">
                                        <img src="../imageBDD/shorty.jpg" id="image-produit2" alt="TrucMachin">
                                        <img src="../imageBDD/shorty.jpg" id="image-produit3" alt="TrucMachin">
                                        <img src="../imageBDD/shorty.jpg" id="image-produit4" alt="TrucMachin">
                                     </div>
                                </div>
                               
                            </div>

                            <div class = "description-article">

                                <div class = "titre">
                                    <H1>Nom de l'article</H1>
                                </div>

                                <div class = "paragraphe">
                                    <p>
                                    Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum 
                                    ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere 
                                    navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, 
                                    et cum id inpossibile videretur,imperator cogitationibus magnis attonitus, quid capesseret ambigebat.
                                    </p>
                                </div>

                                <div class = "titre2">
                                    <h2>FONCTIONNALITÉS</h2>
                                </div>

                                <div class="descriptionSafe">
                                    <div  class="safeDiv">
                                        <img class ="safe"src="../imageBDD/safe.png" alt="safe" > 
                                    </div>
                                    <p>.   Inter has ruinarum varietates a Nisibi quam</p>
                                </div>

                                <div class="descriptionSafe">
                                    <div class="safeDiv">
                                        <img class ="safe"src="../imageBDD/safe.png" alt="safe">
                                    </div>
                                    <p>   Sed quid est quod in hac causa maxime homines</p>
                                </div>

                                <div class="descriptionSafe">
                                    <div class="safeDiv">
                                        <img class ="safe"src="../imageBDD/safe.png" alt="safe">
                                    </div>
                                    <p>   Sed maximum est in amicitia parem esse inferiori.</p>
                                </div>

                                <div class="descriptionSafe">
                                    <div class="safeDiv">
                                        <img class ="safe"src="../imageBDD/safe.png" alt="safe">
                                    </div>
                                    <p>   Unde Rufinus ea tempestate praefectus praetorio ad</p>
                                </div>


                                <div>

                                </div>

                            <!-- début du formulaire -->
                                <form class="form-inline my-2 my-lg-0">  
                                    


                                    <div  class="tailleCouleur">
                                        <!-- choix de la taille -->
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary active">
                                                <input type="radio" name="taille" id="tailleS" autocomplete="off" checked> S
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="taille" id="tailleL" autocomplete="off"> L
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="taille" id="tailleXL" autocomplete="off"> XL
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="taille" id="tailleXXL" autocomplete="off"> XXL
                                            </label>
                                        </div>
                                    
                                        <div class = "choix-couleur"> 

                                        <!-- choix de la couleur -->
                                                    
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary active">
                                                <input type="radio" name="couleur" id="couleurNoir" autocomplete="off" checked> Noir
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="couleur" id="couleurRouge" autocomplete="off"> Rouge
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="couleur" id="couleurBleu" autocomplete="off"> Bleu
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="couleur" id="couleurJaune" autocomplete="off"> Jaune
                                            </label>
                                        </div>
                                    
                                        </div>

                                        <div class = "button-achat">
                                                    
                                        <button type="button" class="btn btn-secondary btn-lg btn-block achat">Acheter immediatement</button>   
                                        
                                        </div>

                                        <div class = "button-ajout-panier">       
                                        <button type="button" class="btn btn-secondary btn-lg btn-block panier">Ajouter au panier</button>   
                                        
                                        </div>

                                    </div>
                                </form>
                            </div>

                           
                              
                           

                        </div>

                        <?php include("../constructor/similaire.php"); ?>


                    </div>
                    

                    <?php include("../constructor/footer.php"); ?>
                    <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

                    <?php include("../constructor/scriptbase.php"); ?>
                        
    </body>
</html>