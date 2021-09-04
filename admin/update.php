<?php

require_once('./admin_includes/header.php');


        if(isset($_POST['btn_edit_category']))
        {
            $up_id = $_POST['edit_id'];
            $up_cat = $_POST['edit_category'];

            $sql= "UPDATE categories SET cat_title='$up_cat' WHERE cat_id='$up_id'";
            $result = mysqli_query($con,$sql);

            if($result){
                
                header("location: categories.php");
                echo '<p class ="alert alert-success"> Catégorie modifiée ! </p>';
            }
            else
            {
                echo '<p class ="alert alert-danger"> Erreur. Catégorie non-modifiée ...  </p>';
            }
        }


        
?>