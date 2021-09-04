<?php 
require_once('./admin_includes/header.php');
?>


    <body>

<?php 
require_once('./admin_includes/nav.php')
?>

    <?php

    if(isset($_POST['btn_add_post'])){

        $Post_Title = $_POST['post_title'];
        $Post_Cat_id = $_POST['post_cat_id'];
        $Post_Author = $_POST['post_author'];
        $Post_Status = $_POST['post_status'];

        $Post_Image = $_FILES['image']['name'];
        $Post_Temp = $_FILES['image']['tmp_name'];

        $Post_Tags = $_POST['post_tags'];
        $Post_Content = $_POST['post_content'];
        $Post_date = date ('d-m-y');
        $Post_comment = 4;


        $sql ="INSERT INTO posts (post_cat_id,post_title,post_author,post_date,post_img,post_content,post_tags,
        post_status) VALUES('$Post_Cat_id', '$Post_Title' ,'$Post_Author', now(), '$Post_Image', '$Post_Content', '$Post_Tags', '$Post_Status')";
        
        $result = mysqli_query($con,$sql);

        if($result){
            echo "Article en ligne !";
            move_uploaded_file($Post_Temp, "../imgs/$Post_Image");

        }else{
        
        echo "Echec de l'ajout de l'article";
    }
}

    ?>


            <div class="container-fluid">

                <!-- Ajout d'un nouvel article -->
                <div class="row">
                    <div class="col">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Ajouter un titre</label>
                                    <input type="text" name="post_title" placeholder="Titre de l'article" class="form-control mb-2">
                                </div>   

                                <div class="form-group">
                                    <label> Catégorie </label>
                                    <input type="text" name="post_cat_id" placeholder="Catégorie de l'article" class="form-control mb-2">
                                </div>  

                                <select name="cat_name" id="" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM categories";
                                    $value = mysqli_query($con,$sql);

                                    while($row = mysqli_fetch_assoc($value)){
                                        
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        
                                    ?>

                                    <option value="<?php echo $cat_id ?>"><?php echo $cat_title ?></option>

                                    <?php 

                                        }

                                    ?>
                                </select>

                                <br>
                                

                                <div class="form-group">
                                    <label>Ajouter un auteur</label>
                                    <input type="text" name="post_author" placeholder="Auteur de l'article" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="post_status" placeholder="Statut de l'article" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>Ajouter une image</label>
                                    <input type="file" name="image" placeholder="image" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>Tags de l'article (sujets)</label>
                                    <input type="text" name="post_tags" placeholder="Thèmes de l'article" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>Contenu de l'article</label>
                                    <textarea name="post_content" class ="form-control" id="" cols="25" rows="25"></textarea>
                                </div>  

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" name="btn_add_post"> Ajouter un article </button>
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