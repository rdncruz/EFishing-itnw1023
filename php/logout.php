<?php 
    session_start();
    include 'db.php';
    if(isset($_SESSION['unique_id'])) {
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)) {
            session_unset();
            session_destroy();
            header("location: ../login.php");
        }
        else {
            header("lcocation: ../index.php");
        }
    }
    else {
        header("location: ../login.php");
    }
?>