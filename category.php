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




    <!-- Contenu -->
    <div class="container">

        <div class="row">
            
            <!-- Catégories entrées sur la side_bar -->
            <div class="col-md-8">
                
                <?php

                if(isset($_GET['category'])){
                    $Category_ID = $_GET['category'];
                }

                $query = "SELECT * FROM posts WHERE post_cat_id='$Category_ID'";
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
                        <small>Géostratech</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        rédigé par <?php echo $post_author?></a>
                    </p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;Publié le <?php echo $post_date ?> </p>
                    <hr>
                    <img class="img-responsive" src= "imgs/<?php echo $post_img ?>" alt="image">
                    <hr>
                    <p><?php echo $post_content ?></p>
                    <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id?>"> Lire  &nbsp; <i class="fas fa-chevron-right"></i></a>

                    <hr>   
                    
                
                    <?php

                    }
                    
                    ?>
                    
            </div> 
        

         
                
        <?php 
        require_once "includes/side_bar.php"
        ?>
    
<!--- Sidebar --->

                <!--- Footer --->
            <?php 
            require_once "includes/footer.php"
            ?>

        
