<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
<div class="text-center">
    <h4 style="font-weight: bold" class=""> <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp; Rechercher sur le site</h4>
</div>
        <form action="search.php" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" name="search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="btn_search">
                    <i class="fas fa-search"></i>
                </button>
                </span>
            </div>
        </form>


    <!-- /.input-group -->
</div>

<!-- Connexion pour les "Admins" -->

<div class="well">
    <div class="text-center">
        <h4 class="pb-3 mb-4 font-italic border-bottom"style="font-weight: bold"> <i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Connexion - Espace Abonnés</h4>
    </div>
    <!----- Connexion confirmée -------->
                                <?php 
                                    if(isset($_SESSION['db_user_name'])) {

                                        echo $_SESSION['db_user_name']; 
                                        echo"  &nbsp; <i class = 'fa fa-check-circle'> &nbsp; est  connecté.</i>";
                                    } else {
                                        echo " Vous souhaitez un compte abonné et participer directement à la publication d'articles ? <p><a href='contact.php'> Contactez-nous !</a></p> ";
                                    }
                                ?>
                                
                
                <form action="includes/login.php" method="POST">
                <div class="form-group">
                <br>
                    <input type="text" name="username" class="form-control" placeholder="Pseudonyme">
                </div>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                    <span class="input-group-btn">
                    <br>
                        <button type="submit" class="btn btn-primary" name ="btn-login" type="btn btn-info">Connexion</button>
                    </span>
                </div>
            </form>
</div>



<!-- Blog Categories Well -->
<div class="well">
    <div class="text-center">
        <h4 style="font-weight: bold" class="pb-3 mb-4 font-italic border-bottom"><i class="fa fa-list-ul" aria-hidden="true"></i> &nbsp; Catégories des articles</h4>
        <br>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <ol class="list">

            <?php

            $query = "SELECT * FROM categories";
            $result = mysqli_query($con,$query);

    // A chaque fois que l'on va cliquer sur une catégorie, on y retrouve les articles associés (+ lien changé)

            while($row = mysqli_fetch_assoc($result))
            {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<li><h5><a class='btn btn-primary' href='category.php?category={$cat_id};'>{$cat_title}</a></h5>
                    </button></li><br>";
            }
            ?>

            </ul>
        </div> 
    </div>
    <!-- /.row -->
</div>

<div class="well">
    <div class="text-center">
        <h4 style="font-weight: bold" class="pb-3 mb-4 font-italic border-bottom"> <i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Actualités Twitter </h4>
    </div>
    
        <div>
        <a class="twitter-timeline" href="https://twitter.com/Geostratech1?ref_src=twsrc%5Etfw"> Compte twitter de Géostratech</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
</div>


<!-- Message d'accueil ! -->
<div class="well">
    <h4 style="font-weight: bold" class="pb-3 mb-4 font-italic border-bottom"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;Edito </h4>
    <p> Vous souhaitez publier un article ? Un dossier thématique ou même une simple carte ? </p>
        <div>
            <h4><p class="mb-0"><a href="contact.php"> C'est par ici !</a></p></h4>
        </div>
</div>

</div>

</div>
<!-- /.row -->
