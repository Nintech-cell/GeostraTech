<?php 
require_once "includes/db.php"
?>

<!--Section "Header"-->

<?php 
require_once "includes/header.php"
?>
   
   <!-- Barre de navigation (thématiques) -->

<?php 
require_once "includes/nav.php"
?>



    <!-- Contenu de la page -->
    <div class="container">


        <div class="row">

            <!-- Code PHP Article -->
            <div class="col-md-8">

            <?php

            if(isset($_GET['p_id']))
            {
                $Post_ID = $_GET['p_id']; 
            }
            $Post_ID = $_GET['p_id']; 
            $query = "SELECT * FROM posts WHERE post_id='$Post_ID'";
            $data = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($data))
            {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_img = $row['post_img'];
            $post_content = $row['post_content'];
            $post_tags = $row['post_tags'];
            
            ?>

                <h1 class="page-header">
                     Article
                    <small> (Lecture : 5 min) </small>
                </h1>

                <!-- Liste d'articles sur la page d'accueil -->
                <h2>
                    <?php echo $post_title  ?>
                </h2>
                <p class="lead">
                    Rédigé par <?php echo $post_author?></a>
                </p>
                <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; Publié le <?php echo $post_date; ?> </p>
                
                <img class="img-responsive" src= "imgs/<?php echo $post_img ?>" alt="géostratech">
                
                <p><?php echo $post_content ?></p>
                

                <hr>   
                
            <!-- Commentaire -->
            <?php

            }

                if(isset($_POST['btn_submit'])){

                    $Post_ID = $_GET['p_id'];
                    $Author = $_POST['author'];
                    $Email = $_POST['email'];
                    $Comment = $_POST['comment'];

                    $sql = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,
                    comment_status,comment_date) VALUES ('$Post_ID', '$Author', '$Email', '$Comment', 'Approuvé' , now())";
                    
                    $data = mysqli_query($con,$sql);
                    if($data)
                    {
                        echo '<div class="alert alert-success"> Commentaire envoyé, en cours de traitement </div>';
                    }else{
                        echo '<div class="alert alert-danger"> Echec du commentaire </div>';

                    }

                    $update_comment_count = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id='$Post_ID'";
                    mysqli_query($con,$update_comment_count);
                    
                }
            
            ?>



            <!-- Liste des commentaires -->
                <!-- Formulaire - Commentaire -->
                <div class="well">
                    <h4>Laisser un commentaire :</h4>
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label for="author">Nom</label>
                            <input type="text" name="author" placeholder="Votre nom" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Votre e-mail" class="form-control">   
                        </div>
                        <div class="form-group">
                            <label for="commentaire">Commentaire</label>
                            <textarea class="form-control" rows="3" placeholder="Ecrire votre commentaire" name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_submit">Envoyer le commentaire</button>
                    </form>
                </div>

               

                    <?php

                    $comment_query = "SELECT * FROM comments WHERE comment_post_id='$Post_ID' AND comment_status='approve'
                    ORDER BY comment_id DESC";
                    $comment_result = mysqli_query($con,$comment_query);

                    while($data = mysqli_fetch_assoc($comment_result)){
                        $comment_author = $data['comment_author'];
                        $comment_date = $data['comment_date'];
                        $comment_content = $data['comment_content'];
                        
                    ?>

                <!-- Commentaires déjà publiés -->

                <!-- Liste des commentaires publiés -->
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author ?>
                            <small><?php echo $comment_date ?></small>
                        </h4>

                        <?php echo $comment_content ?>
                    </div>
                </div>

                <?php
                    }
                    
                   

                ?>


            </div>


                <!--- Sidebar --->
            <?php 
            require_once "includes/side_bar.php"
            ?>

            <hr>
      <!--- Sidebar --->
      <?php 
            require_once "includes/footer.php"
        ?>

            
