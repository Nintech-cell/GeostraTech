<?php
    include_once './sessions/sessions.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>

<body background="./imgs/globe.jpg">
    <!------- Logo -------->
    <br>
    <img src="imgs/geostrat.png" class="img-fluid rounded mx-auto d-block" style=width:10%> 
    <hr class="container">
    <h1 class="text-center" style="color:aliceblue">Géostratech</h1>
    <h3 class="text-center" style="color:aliceblue">Site d'informations et de publications géopolitiques</h3>
    <hr class="container">


    <!----------- Fin du logo --------->

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <!----------------- Formulaire de connexion ------------------->
                    
                    <h4 class= "text-center">Se connecter</h4>
                    <?php flash('login') ?>
                    <form action="./controllers/users.php" method="post" class="row g-3">  
                        <!------- Formulaire d'inscription / connexion --------->
                        <div class="col-12">
                            <input type="hidden" name="type" value="login">
                        </div>
                        
                        <div class="col-12">
                            <label>Pseudo ou e-mail</label>
                            <br>
                            <input type="text" name="name/email" class="form-control" placeholder="Pseudo ou email">
                        </div>
                        <div class="col-12">
                            <label>Mot de passe</label>
                            <br>
                            <input type="password" name="usersPwd" class="form-control" placeholder="Mot de passe">
                        </div>
                        <br>
                        <div class="col-12">
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-dark float-center">S'enregistrer</button>
                            </div>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="text-center pt-1 mb-5 pb-1">
                        <p class="mb-0 me-2"> Avez-vous un compte ?</p>
                        <br>
                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark"><a href="login.php" style="text-decoration: none;"> Créer un compte.</a></button>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                        <p class="mb-0 me-2"> Avez-vous oublié votre mot de passe ?</p>
                        <br>
                        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark"><a href="forgot.php" style="text-decoration: none;"> J'ai oublié mon mot de passe.</a></button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
     <!--- Sidebar --->
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
 
</html>