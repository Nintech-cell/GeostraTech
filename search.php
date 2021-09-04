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

    <!-- Page Content -->
    <div class="container">



        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            
                
                <?php

                if(isset($_POST['btn_search']))
                {
                $search = $_POST['search'];
                $sql = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                $result = mysqli_query($con,$sql);
            
                if(mysqli_num_rows($result)){

                
            
                    while($row = mysqli_fetch_assoc($result))
                    {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_img = $row['post_img'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
                ?>

                
                <h1 class="page-header">
                    Liste des articles
                    <small>Géostratech</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    rédigé par <a href="index.php"><?php echo $post_author?></a>
                </p>
                <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;  Publié le <?php echo $post_date; ?> </p>
                <hr>
                <img class="img-responsive" src= "imgs/<?php echo $post_img ?>" alt="image">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?p_id=$post_id">Lire &nbsp; <i class="fas fa-chevron-right"></i></a>

                <hr>   
                
            


            <?php

                    }
                }else{
                    echo "<h2> Recherche infructueuse ...</h2>";
                }


            }
            ?>
            </div> 

        

                <!--- Sidebar --->
            <?php 
            require_once "includes/side_bar.php"
            ?>

            <hr>

                <!--- Footer --->
            <?php 
            require_once "includes/footer.php"
            ?>

        
