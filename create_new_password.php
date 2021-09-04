<?php
    if(empty($_GET['selector']) || empty ($_GET['validator'])){
        echo 'Nous ne pouvons accéder à votre requête.';
    }else{
        $selector = $_GET['selector'];
        $validator = $_GET['validator'];

        if(ctype_xdigit($selector) && ctype_digit($validator)){ ?>

<?php

include_once './sessions/sessions.php'

?>
<h2 class="text-center"> Entrez votre nouveau mot de passe </h2>

<?php flash("reset") ?>
    <form action="./controllers/reset_password.php" method="post" class="row g-3">  
    <input type="hidden" name="type" value="reset"/>
    <input type="hidden" name="selector" value="<?php echo $selector ?>"/>
    <input type="hidden" name="validator" value="<?php echo $validator ?>"/>
        <div class="col-12">
            <input type="text" name="usersEmail" class="form-control" placeholder="Entrer un nouveau mot de passe">
        </div>
        <div class="col-12">
            <input type="text" name="usersEmail" class="form-control" placeholder="Confirmer le nouveau mot de passe">
            <div class="text-center pt-1 mb-5 pb-1">
                <button type="submit" class="btn btn-info">Recevoir le mail</button>
            </div>
        </div>
        <br>      
     </form>
<?php 
        }else{
            echo 'nous ne pouvons accéder à votre requête ...';
        }
    }

    ?>