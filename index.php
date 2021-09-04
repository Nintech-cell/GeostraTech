

<?php 
require_once "includes/db.php"
?>

<!--Header section-->

<?php 
require_once "includes/header.php"
?>


   <!-- Barre de navigation -->

<?php 
require_once "includes/nav.php"

?>

    <!-- div. Container -->
    <div class="container">


        <div class="row">

            <!-- Affichage de l'article sur la page -->
            <h3 id="index-text" class="text-center">Bienvenue sur le site, <?php if(isset($_SESSION['usersId'])){
                echo explode(" ", $_SESSION['usersName'])[0];
            }else{
                echo 'Invité';
            }
            ?>
            </h3>
            
            <div class="col-md-8">


            <?php
            $query = "SELECT * FROM posts WHERE post_status = 'publié'";
            $data = mysqli_query($con,$query);
            $post_status = "";

            while($row = mysqli_fetch_assoc($data))
            {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_img = $row['post_img'];
            $post_content = $row['post_content'];
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
            ?>



                <!-- Article -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title  ?></a>
                </h2>
                <p class="lead">
                    Rédigé par <a href="index.php"><?php echo $post_author?></a>
                </p>
                <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; Publié le <?php echo $post_date ?> </p>
                
                <a href="post.php?p_id=<?php echo $post_id ?>">
                    <img class="img-responsive" src= "imgs/<?php echo $post_img ?>" alt="image">
                </a>
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id?>"> Lire &nbsp;  <i class="fas fa-chevron-right"></i></a>

                <hr>   
                
            


            <?php

            }
                if($post_status !== 'publié'){
                    echo '<div class="alert alert-danger">Articles non-publiés</div>';
                }
            
            ?>
            </div> 

        

                <!--- Sidebar --->
            <?php 
            require_once "includes/side_bar.php"
            ?>
            </div>
                
            <div class="container">
                    <label for="customRange3" class="form-label"></label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">  
            </div>        
                <br> 

                <!--- Footer --->
            <?php 
            require_once "includes/footer.php"
            ?>

        
