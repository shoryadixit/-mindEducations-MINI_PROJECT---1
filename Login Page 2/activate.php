<?php

session_start();

include './dbConnection.php';

if (isset($_GET['token'])){
    $token = $_GET['token'];
    $update_query = "UPDATE student set status='active' WHERE token='$token'";

    $query = mysqli_query($conn, $update_query);
    if ($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated Succesfully !!!";
            header('Refresh: 0; URL=./index.html');
        } else {
            $_SESSION['msg'] = "You are logged Out !!!";
            header('Refresh: 0; URL=./index.html');
        }
    }else {
        $_SESSION['msg'] = "Account not verified";
        header('Refresh: 0; URL=./index.html');
    }
}

?>