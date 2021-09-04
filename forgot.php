<?php 
require_once "includes/header.php";
include_once './sessions/sessions.php'
?>

<!----- Logo ------>
<div class="rounded mx-auto d-block">
    <br>
    <img src="imgs/geostrat.png" class="img-fluid rounded mx-auto d-block" style=width:10%> 
    <hr class="container">
    <h1 class="text-center">Géostratech</h1>
    <h3 class="text-center">Site d'informations et de publications géopolitiques</h3>
    <hr class="container">
</div>

<!-------- Formulaire -------->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <!------------------- Formulaire ---------------------------->
                    <?php flash('reset') ?>
                    <form action="./controllers/reset_password.php" method="post" class="row g-3">  
                    <input type="hidden" name="type" value="send">
                    <img src="./imgs/lock.jpg">
                                    <!------- Début --------->
                        <div class="col-12">
                            <input type="hidden" name="type" value="login">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center"> Vous avez oublié votre mot de passe ? </h2>
                            <br>
                        </div>
                        <div class="col-12">
                            <div class="text-center">
                                <label class= "text-center">Veuillez entrer votre adresse e-mail pour recevoir votre mot de passe </label>
                            </div>
                            <br>
                            <input type="text" name="usersEmail" class="form-control" placeholder="Votre adresse email">
                            <div class="text-center pt-1 mb-5 pb-1">
                                <button type="submit" class="btn btn-info">Envoyer l'adresse mail</button>
                            </div>
                            <hr class="mt-4">
                            <div class="text-center pt-1 mb-5 pb-1">
                            <br>
                                <p>Vous pouvez aussi contacter notre <a href="mailto: faresamriche@hotmail.fr">support</a></p>
                            </div>
                        </div>
                        <br>
                    
                    </form>
                    <hr class="mt-4">
                    <div class="text-center pt-1 mb-5 pb-1">
                        <p class="mb-0 me-2"> Vous avez retrouvé votre mot de passe ?</p>
                        <br>
                        <button type="submit" class="btn btn-info"><a href="register.php" style="text-decoration: none;"> Se connecter</a></button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</section>
        <br>
 
                                
            
