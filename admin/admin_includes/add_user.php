<?php 
require_once('./admin_includes/header.php');
?>



    <body>

<?php 
require_once('./admin_includes/nav.php')
?>
                <!------- Ajout d'un utilisateur ------->
    <?php

    if(isset($_POST['btn_add_user'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_role = $_POST['user_role'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        

        /*
        $Post_Image = $_FILES['image']['name'];
        $Post_Temp = $_FILES['image']['tmp_name'];

        $Post_Tags = $_POST['post_tags'];
        $Post_Content = $_POST['post_content'];
        */

        

        $sql ="INSERT INTO users (user_name,user_password,first_name,last_name,user_email,user_role) 
        VALUES ('$user_name', '$user_password' , '$first_name', '$last_name', '$user_email', '$user_role')";
        
        $result = mysqli_query($con,$sql);

        if($result){
            echo "Utilisateur ajouté à la liste !";
           // move_uploaded_file($Post_Temp, "../imgs/$Post_Image");

        }else{
        
        echo "Echec de l'ajout de l'utilisateur ...";
    }
    
}

    ?>


            <div class="container-fluid">

                <!-- Ajout d'un nouvel utilisateur (html) -->
                <div class="row">
                    <div class="col">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="first_name" placeholder="Nom" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="last_name" placeholder="Prénom" class="form-control mb-2">
                                </div>  

                                
                                    <select name="user_role" id="" class="form-control">
                                        <option name="subscriber" id="">Choisir un type d'utilisateur</option>
                                        <option name="admin" id="">Administrateur</option>
                                        <option name="subscriber" id="">Lecteur</option>
                                    </select>
                                 <br>
                                <div class="form-group">
                                    <label>Pseudo</label>
                                    <input type="text" name="user_name" placeholder="Pseudonyme" class="form-control mb-2">
                                </div>  

                                <div class="form-group">
                                    <label>E-mail de l'utilisateur</label>
                                    <input type="email" name="user_email" placeholder="E-mail" class="form-control mb-2">
                                </div>  
                                <div class="form-group">
                                    <label>Mot de passe de l'utilisateur</label>
                                    <input type="password" name="user_password" placeholder="Mot de passe" class="form-control mb-2">
                                </div> 

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" name="btn_add_user"> Ajouter l'utilisateur </button>
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