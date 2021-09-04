<?php
    session_start();

    $_SESSION['db_user_name'] = null;
    $_SESSION['db_user_role'] = null;
    header("location: ../index.php");
    

?>