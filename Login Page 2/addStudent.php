<?php

session_start();

include('./dbConnection.php');

if (!isset($_SESSION['is_login'])){
    if (isset($_POST['signUp'])){
        
        $stuname = mysqli_real_escape_string($conn, $_POST['stuname']);
        $stuemail = mysqli_real_escape_string($conn, $_POST['stuemail']);
        $stupass = mysqli_real_escape_string($conn, $_POST['stupass']);

        $pass = password_hash($stupass, PASSWORD_BCRYPT);

        $token = bin2hex(random_bytes(15));

        $emailquery = "SELECT * FROM student WHERE stu_email='$stuemail'";
        $query = mysqli_query($conn, $emailquery);

        $emailcount = mysqli_num_rows($query);
        if ($emailcount > 0){
            echo "<script>alert('Email already Exists, Try to login')</script>";
            header('Refresh: 1; URL= ./index.html');
        } else {
            $insertquery = "INSERT INTO student(stu_name,stu_email,stu_pass,token,status) VALUES ('$stuname','$stuemail','$pass','$token','inactive')";
            $iquery = mysqli_query($conn, $insertquery);
            if($iquery){
                echo "<script>alert('Check Your Email to Activate Your Account !!!')</script>";
                $subject = "Email Activation";
                $body = "Hi, .$stuname. Click here to this link to activate your account.
                http://localhost/second/mind/Login%20Page%202/activate.php?token=$token.";
                $header = "From:mindeductions@gmail.com";

                if (mail($stuemail, $subject, $body, $header)){
                    echo "<script>alert('Check Your email to email to verify your account .$stuemail.')</script>";
                    header('Refresh: 1; URL= ./index.html');
                }
            }
        }

    }
} else {
    echo "<script>alert('SomeOne is Logged In !!!')</script>";
}
?>
