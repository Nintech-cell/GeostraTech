<?php
require_once('./admin_includes/header.php');
?>


    <?php
    if(isset($_SESSION['db_user_name'])){

        $username = $_SESSION['db_user_name'];
        $sql = "SELECT * FROM users WHERE user_name ='$username'";

        $data = mysqli_query($con,$sql);

        while($row = mysqli_fetch_assoc($data)){
            
            $user_db_id = $row['user_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $user_role = $row['user_role'];
            $user_name = $row['user_name'];
            $user_email = $row['user_email'];
            $user_password = $row['user_password'];
        }
    }

    if(isset($_POST['btn_update_profil'])){
            
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_role = $_POST['user_role'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $update_query = "UPDATE users SET first_name='$first_name', last_name='$last_name', user_role='$user_role',
         user_name='$user_name', user_email='$user_email', user_password='$user_password' 
         WHERE user_name ='$username'";

         $update_user_query = mysqli_query($con,$update_query);
         if($update_user_query){
             
             header("location: users.php");
             
         }
         else{
             echo "Echec de la mise à jour du profil";
         }
        

    }

    

        // Si l'on clique sur la modification, alors on enregistre les modifs

    ?>


    <body>

    <div id="wrapper">

        <?php 
        require_once('./admin_includes/nav.php')
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small><i class="fa fa-user"> Profil - Utilisateurs</i></small>
                        </h1>

                        <!------------ Formulaire - Profil --------------->
                        <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="first_name" placeholder="Nom" class="form-control mb-2"value="<?php echo $first_name ?>">
                                </div>  

                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="last_name" placeholder="Prénom" class="form-control mb-2" value="<?php echo $last_name ?>">
                                </div>  

                                    <label> Rôle </label>
                                    <select name="user_role" id="" class="form-control">
                                        <option value="subscriber"><?php echo $user_role ?></option>
                                        <?php

                                        if($user_role == 'admin'){
                                                echo "<option value='subscriber'> Utilisateur</option>";
                                        }else{
                                                echo "<option value='admin'> Administrateur</option>";
                                        }

                                        ?>
                                    </select>
                                 <br>
                                <div class="form-group">
                                    <label>Pseudo</label>
                                    <input type="text" name="user_name" placeholder="Pseudonyme" class="form-control mb-2" value="<?php echo $user_name ?>">
                                </div>  

                                <div class="form-group">
                                    <label>E-mail de l'utilisateur</label>
                                    <input type="email" name="user_email" placeholder="E-mail" class="form-control mb-2" value="<?php echo $user_email ?>">
                                </div>  
                                <div class="form-group">
                                    <label>Mot de passe de l'utilisateur</label>
                                    <input type="password" name="user_password" placeholder="Mot de passe" class="form-control mb-2" value="<?php echo $user_password ?>">
                                </div> 

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" name="btn_update_profil"> Modifier le profil </button>
                                </div>
                            </form> 

                    </div>

                </div>
                    <!-- /.row -->
            </div>
                <!-- /.container-fluid -->
        </div>
            <!-- /#page-wrapper -->


<?php 
require_once('./admin_includes/footer.php')
?>

