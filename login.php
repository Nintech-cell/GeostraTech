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
<body>
    <!--- Logo --->
    <br>
<img src="imgs/geostrat.png" class="img-fluid rounded mx-auto d-block" style=width:10%> 
<hr class="container">
<h1 class="text-center">Géostratech</h1>
<h3 class="text-center">Site d'informations et de publications géopolitiques</h3>
<hr class="container">

    <!---  Formulaire ---->
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <?php
                    flash('register')
                    ?>
                    <form action="./controllers/users.php" method="post" class="row g-3">
                        <h4 class= "text-center">Bienvenue</h4>
                        <!------- Formulaire d'inscription / connexion --------->
                        <div class="col-12">
                            <input type="hidden" name="type" value="register">
                        </div>
                    
                        <div class="col-12">
                            <label>Nom et prénom</label>
                            <br>
                            <input type="text" name="usersName" class="form-control" placeholder="vos noms et prénoms">
                        </div>
                        <div class="col-12">
                            <label>Email</label>
                            <br>
                            <input type="text" name="usersEmail" class="form-control" placeholder="Votre e-mail">
                        </div>
                        <div class="col-12">
                            <label>Pseudo/Nom</label>
                            <br>
                            <input type="text" name="usersUid" class="form-control" placeholder="Votre pseudo/Nom/identifiant">
                        </div>
                        <div class="col-12">
                            <label>Mot de passe</label>
                            <br>
                            <input type="password" name="usersPwd" class="form-control" placeholder="Votre mot de passe">
                        </div>
                        <div class="col-12">
                            <label>Confirmation</label>
                            <br>
                            <input type="password" name="pwdRep" class="form-control" placeholder="Confirmer le mot de passe">
                        </div>
                        <br>
                        <div class="col-12">
                            <button type="submit" name ="submit" class="btn btn-dark rounded mx-auto d-block">S'inscrire</button>
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                        <p class="mb-0 me-2"> Avez-vous déjà un compte ?</p>
                        <br>
                        <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark"><a class="text-muted" href="register.php"> Se connecter</a></button>
                    </div>
                    </form>
                    <hr class="mt-4">
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>