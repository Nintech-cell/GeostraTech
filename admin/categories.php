<?php 
require_once('./admin_includes/header.php')
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
                            <small>Auteur-Admin</small>
                        </h1>
                    </div>


                        <!-- Ajouter une nouvelle catégorie-->
                        <div class="col-lg-6">

                        <?php

                            if(isset($_POST['btn_category']))
                            {
                                if($_POST['category'] == "")
                                {
                                        echo '<p class="alert alert-danger"> Veuillez remplir le champ "catégorie".</p>';
                                }
                                else
                                {
                                    $Add_Cat = $_POST['category'];
                                    $query = "INSERT INTO CATEGORIES (cat_title) VALUES ('$Add_Cat')";
                                    mysqli_query($con,$query);
                                }
                            }

                        ?>

                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Ajouter une catégorie</label>
                                    <input type="text" name="category" placeholder="Ecrire la catégorie" class="form-control mb-2">
                                </div>   
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" name="btn_category"> Ajouter une catégorie </button>
                                </div>
                            </form>
                            
                            <!-- Editer la catégorie -->

                            <?php
                            if(isset($_GET['edit']))
                                
                                {   $Edit_Id = $_GET['edit'];
                                    $sql = "SELECT * FROM categories WHERE cat_id = '$Edit_Id'";
                                    $result = mysqli_query($con,$sql);
                                    $data = mysqli_fetch_assoc($result);

                            ?>

                                <form action="update.php" method="POST">
                                    <div class="form-group">
                                        <label>Changer une catégorie</label>
                                        <input type="text" name="edit_category" value="<?php echo $data['cat_title']; ?>" placeholder="Ecrire la catégorie" class="form-control mb-2">
                                        <input type="hidden" name="edit_id" value="<?php echo $data['cat_id']; ?>">
                                    
                                    </div>   
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" name="btn_edit_category"> Editer une catégorie </button>
                                    </div>
                                </form>
                            
                            <?php

                                }

                            ?>

                        </div>
                        
                        <div class="col-lg-6">
                            <table class="table table-bordered">
                                <tr>

                                    <th style ="width: 20%"> ID de la catégorie</th>
                                    <th style ="width: 45%"> Nom de la catégorie</th>
                                    <th style ="width: 20%" colspan="2"> Modifier</th>
                                </tr>
                                
                                <?php 
                                
                                $sql = "SELECT * FROM categories";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>

                                <!--Enlever et supprimer des catégories-->
                                <tr>
                                    <td> <?php echo $row['cat_id']; ?> </td>
                                    <td> <?php echo $row['cat_title']; ?> </td>
                                    <td> <a href="categories.php?Del=<?php echo $row['cat_id']; ?>" class = "btn btn-danger"><span class= "fa fa-trash"></span></a></td>
                                    <td> <a href="categories.php?edit=<?php echo $row['cat_id']; ?>" class = "btn btn-success"><span class= "fa fa-edit"></span></a></td>
                                    
                                    
                                </tr>

                                <?php
                                }

                                if(isset($_GET['Del']))
                                {
                                    $Del = $_GET['Del'];
                                    $Sql = "DELETE FROM categories WHERE cat_id='$Del'";
                                    $result = mysqli_query($con,$Sql);

                                    if($result)
                                    {
                                        header("location: categories.php");
                                    }
                                }
                                ?>


                            </table>
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