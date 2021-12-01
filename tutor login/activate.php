<?php

session_start();

include 'config.php';

if (isset($_GET['token'])){
    $token = $_GET['token'];
    $update_query = "UPDATE tutor set status='active' WHERE token='$token'";

    $query = mysqli_query($conn, $update_query);
    if ($query){
        $data = mysqli_num_rows($query);
        $_SESSION['msg'] = "true";
        if(isset($_SESSION['msg'])){
            echo "<script>alert('Account activated Succesfully !!!')</script>";
            $_SESSION['tutoruser'] = $data['username'];
            header('Refresh: 0; URL=./welcome.php');
        } else {
            echo "<script>alert('You are logged Out !!!')</script>";
            header('Refresh: 0; URL=./welcome.php');
        }
    }else {
        echo "<script>alert('Account not verified !!!')</script>";
        header('Refresh: 5; URL=./welcome.php');
    }
}

?>