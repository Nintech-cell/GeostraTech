<?php
    echo"<h1> Modification de l'article </h1>";
?>

<?php 
require_once('./admin_includes/header.php');
?>



    <body>

<?php 
require_once('./admin_includes/nav.php')
?>

    <?php

        if(isset($_GET['p_id'])){
            $Post_ID = $_GET['p_id'];
            $sql="SELECT * FROM posts WHERE post_id='$Post_ID'";
            $result = mysqli_query($con,$sql);

            while($row = mysqli_fetch_assoc($result)){
                $post_id = $row['post_id']; 
                $post_author = $row['post_author']; 
                $post_title = $row['post_title']; 
                $post_cat_id = $row['post_cat_id']; 
                $post_status = $row['post_status']; 
                $img = $row['post_img'];
                $post_tags = $row['post_tags'];
                $post_content = $row['post_content'];
                
            }
        }


        if(isset($_POST['btn_edit_post'])){
            
            $Post_Title = $_POST['post_title'];
            $Post_Cat_id = $_POST['cat_name'];
            $Post_Author = $_POST['post_author'];
            $Post_Status = $_POST['post_status'];

            $Post_Image = $_FILES['image']['name'];
            $Post_Temp = $_FILES['image']['tmp_name'];

            $Post_Tags = $_POST['post_tags'];
            $Post_Content = $_POST['post_content'];
            
            if(empty($Post_Image))
            {
                $query = "SELECT * FROM posts WHERE post_id='$Post_ID'";
                $result = mysqli_query($con,$query);

                while($row = mysqli_fetch_assoc($result)){
                    $Post_Image = $row['post_img'];
                }
            }



            $sql= "UPDATE posts SET post_cat_id='$Post_Cat_id', post_title='$Post_Title', 
            post_author='$Post_Author', post_status='$Post_Status', post_date=now(), post_img='$Post_Image', post_tags='$Post_Tags',
             post_content='$Post_Content' WHERE post_id='$Post_ID'";
            $result = mysqli_query($con,$sql);

            if($result){
                //header("location: ./posts.php");
                move_uploaded_file($Post_Temp, "../imgs/$Post_Image");
                echo "<p class='alert alert-success'> Article mis à jour ! <a href='../post.php?p_id=$post_id'> Voir sur le site </a></p>";
            }
        }
    
    ?>



            <div class="container-fluid">

                <!-- Ajout d'un nouvel article -->
                <div class="row">
                    <div class="col">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Editer le titre</label>
                                    <input type="text" name="post_title" placeholder="Titre de l'article" class="form-control mb-2" value="<?php echo $post_title ?>">
                                </div>   

                                <div class="form-group">
                                    <label> Choisir une catégorie</label>
                                    <select name="cat_name" id="" class="form-control">
                                        
                                        <?php
                                        $query = "SELECT * FROM categories";
                                        $data = mysqli_query($con,$query);

                                        while($row = mysqli_fetch_assoc($data))
                                        { 
                                            $cat_id = $row['post_cat_id'];
                                        ?>
                                        <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_title'];?></option>
                                        
                                        <?php
                                        }

                                        ?>


                                    </select>
                                    </div>  

                                <div class="form-group">
                                    <label>Modifier l'auteur</label>
                                    <input type="text" name="post_author" placeholder="Auteur de l'article" class="form-control mb-2" value="<?php echo $post_author ?>">
                                </div>  

                                <div class="form-group">
                                    <label>Statut de l'article</label>
                                    <!----<input type="text" name="post_status" placeholder="Statut de l'article" class="form-control mb-2" value="<?php echo $post_status ?>"> --->
                                        <select name= "post_status" class="form-control">
                                            <option value="draft"><?php echo $post_status ?></option>
                                        <?php

                                        if($post_status == "published")
                                        {
                                            echo "<option value='en cours'> En cours </option>";
                                        }else{
                                            echo "<option value='publié'> Publié </option>";
                                        }


                                        ?>
                                        </select>
                                </div>  

                                <div class="form-group">
                                    <label>Changer l'image</label>
                                    <img width="130" height ="120"class ="img-responsive" src="../imgs/<?php echo $img; ?>">
                                    <input type="file" name="image" placeholder="image" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>Modifier les tags de l'article (sujets)</label>
                                    <input type="text" name="post_tags" placeholder="Thèmes de l'article" class="form-control mb-2" value="<?php echo $post_tags ?>">
                                </div>  

                                <div class="form-group">
                                    <label>Modifier le contenu de l'article</label>
                                    <textarea name="post_content" class ="form-control" id="editor" cols="30" rows="10"><?php echo $post_content ?></textarea>
                                </div>  

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" name="btn_edit_post"> Editer l'article </button>
                                </div>
                            </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        <!-- /.container-fluid -->
        
<!--- Footer--->
<?php 
require_once('./admin_includes/footer.php')
?>