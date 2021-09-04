<?php
    session_start();
    require_once "db.php";


    if(isset($_POST['btn-login'])){
        $UserName = $_POST['username'];
        $Password = $_POST['password'];
            //conversion en lettres / sécurité
        $UserName = mysqli_real_escape_string($con,$UserName);
        $Password = mysqli_real_escape_string($con,$Password);

        $query = "SELECT * FROM users WHERE user_name='$UserName'";
        $data = mysqli_query($con,$query);

        while($row = mysqli_fetch_assoc($data)){
            $db_user_ID = $row['user_id'];
            $db_UserName = $row['user_name'];
            $db_Password = $row['user_password'];
            $db_FirstName = $row['first_name'];
            $db_LastName = $row['last_name'];
            $user_email = $row['user_email'];
            $user_role = $row['user_role'];
        }
            // Connexion au site + sessions
        if($UserName === $db_UserName && $Password === $db_Password)
        {   
            $_SESSION['db_user_name'] = $db_UserName;
            $_SESSION['db_user_role'] = $user_role;
            header("location: ../admin");
        }
        else{
            header("location: ../index.php");
        }

    }

    ?>