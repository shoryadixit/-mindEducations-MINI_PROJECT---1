<?php

session_start();
include('./dbConnection.php');

if(!isset($_SESSION['is_login'])){
    if (isset($_POST['signIn'])){
        $stuemail = $_POST['email'];
        $stupass = $_POST['pass'];

        $emailsearch = "SELECT * FROM student WHERE stu_email='$stuemail' and status='active'";
        $query = mysqli_query($conn, $emailsearch);

        $email_count = mysqli_num_rows($query);
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['stu_pass'];
            $pass_decode = password_verify($stupass, $db_pass);
            if($pass_decode){
                echo "<script>alert('Login Succesfull !!!')</script>";
                $_SESSION['user'] = $email_pass['stu_name'];
                $_SESSION['is_login'] = "true";
                header('Refresh: 0; URL=../mind/index.php');
            } else {
                echo "<script>alert('Incorrect Password')</script>";
                header('Refresh: 0; URL=./index.html');
            }
        } else {
            echo "<script>alert('Invalid Email')</script>";
            header('Refresh: 0; URL=./index.html');
        }
    }
} else {
    echo "<script>alert('SomeOne is Logged In !!!')</script>";
    header("Location: ../mind/index.php");
}
?>
