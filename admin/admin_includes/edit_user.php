<?php 
require_once('./admin_includes/header.php');
?>



    <body>

<?php 
require_once('./admin_includes/nav.php')
?>
                <!------- Ajout d'un utilisateur ------->
    <?php

    

    if(isset($_GET['edit_user'])){

        $User_ID = $_GET['edit_user'];
        $sql_user_query = "SELECT * FROM users WHERE user_id='$User_ID'";
        $sql_user_update = mysqli_query($con, $sql_user_query);

        while($row = mysqli_fetch_assoc($sql_user_update)){
        $user_db_id = $row['user_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $user_role = $row['user_role'];
        $user_name = $row['user_name'];
        $user_email = $row['user_email'];
        $user_password = $row['user_password'];

        } 

    }
    ?>


            <div class="container-fluid">

                <!-- Changer les informations de l'utilisateur (html) -->
                <div class="row">
                    <div class="col">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="first_name" placeholder="Nom" class="form-control mb-2"value="<?php echo $first_name ?>">
                                </div>  

                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="last_name" placeholder="Prénom" class="form-control mb-2" value="<?php echo $last_name ?>">
                                </div>  

                                
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
                                    <button class="btn btn-success" type="submit" name="btn_update_user"> Modifier l'utilisateur </button>
                                </div>
                            </form>
                    </div>

                </div>
                    <!-- /.row -->
            </div>
                <!-- /.container-fluid -->
                
                <?php

                if(isset($_POST['btn_update_user'])){

                    
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $user_role = $_POST['user_role'];
                    $user_name = $_POST['user_name'];
                    $user_email = $_POST['user_email'];
                    $user_password = $_POST['user_password'];

                    $update_query = "UPDATE users SET first_name='$first_name', last_name='$last_name', user_role='$user_role',
                     user_name='$user_name', user_email='$user_email', user_password='$user_password' 
                     WHERE user_id='$User_ID'";

                     $update_user_query = mysqli_query($con,$update_query);
                     if($update_user_query){
                         echo " Les entrées ont été mises à jour !";
                         header("location: users.php");
                         
                     }
                     else{
                         echo "Echec de la mise à jour";
                     }
                    
                }

                ?>



<!--- Footer--->
<?php 
require_once('./admin_includes/footer.php')
?>