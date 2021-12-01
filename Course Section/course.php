<?php

session_start();

if(!isset($_SESSION['is_login'])){
    echo"<script>alert('First, try to login or SignUp !!!')</script>";
    header("Refresh: 0; URL=../mind/index.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./cstyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../mind/images/logo.png" alt="">
            </a>
        </div>
        <div class="item-back">
        </div>
        <div class="item">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../mind/index.php" style="color: white;">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./courseindex.php" style="color: white;">
                        Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Login Page 2/logout.php" style="color: white;">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <?php
            if(isset($_POST['cbutton'])){
                echo"<iframe width='560' height='315'
                src='https://www.youtube.com/embed/videoseries?list=PLu0W_9lII9aiXlHcLx-mDH1Qul38wD3aR'
                title='YouTube video player' frameborder='0'
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                allowfullscreen></iframe>";


                echo "
            <p><u>Provided Study Material : </u></p>"."<br>"."
            <a href='../uploadcourses/view.php?file=c' target='_pdf'>Click here to view</a>";
            }
            
        ?>
        <?php
            if(isset($_POST['jbutton'])){
                echo"<iframe width='560' height='315'
                src='https://www.youtube.com/embed/videoseries?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q'
                title='YouTube video player' frameborder='0'
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                allowfullscreen></iframe>";
                

                echo "
            <p><u>Provided Study Material : </u></p>
            <a href='../uploadcourses/view.php?file=j' target='_pdf'>Click here to view</a>";
            }
            
        ?>
        
        <?php
             if(isset($_POST['pbutton'])){
                echo "<iframe width='560' height='315'
                    src='https://www.youtube.com/embed/videoseries?list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3'
                    title='YouTube video player' frameborder='0'
                    allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                    allowfullscreen></iframe>";

                    echo "
            <p><u>Provided Study Material : </u></p>
            <a href='../uploadcourses/view.php?file=p' target='_pdf'>Click here to view</a>";
            }
            
        ?>

        <?php
            if (isset($_SESSION['dbutton'])){
                echo"<iframe width='560' height='315'
                src='https://www.youtube.com/embed/videoseries?list=PLu0W_9lII9ahIappRPN0MCAgtOu3lQjQi'
                title='YouTube video player' frameborder='0'
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                allowfullscreen></iframe>";

                echo "
            <p><u>Provided Study Material : </u></p>
            <a href='../uploadcourses/view.php?file=d' target='_pdf'>Click here to view</a>";
            }
            
        ?>

        <?php
            if(isset($_SESSION['sbutton'])){
                echo"<iframe width='560' height='315'
                src='https://www.youtube.com/embed/videoseries?list=PLxCzCOWd7aiHqU4HKL7-SITyuSIcD93id'
                title='YouTube video player' frameborder='0'
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                allowfullscreen></iframe>";


                echo "<p><u>Provided Study Material : </u></p>."."<br>".".
                <a href='../uploadcourses/view.php?file=s' target='_pdf'>Click here to view</a>";
            }
            
        ?>

        <?php
            if(isset($_SESSION['databutton'])){
                echo"<iframe width='560' height='315'
                src='https://www.youtube.com/embed/videoseries?list=PLeo1K3hjS3us_ELKYSj_Fth2tIEkdKXvV'
                title='YouTube video player' frameborder='0'
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                allowfullscreen></iframe>";


                echo "
            <p><u>Provided Study Material : </u></p>
            <a href='../uploadcourses/view.php?file=data' target='_pdf'>Click here to view</a>";
            }
            
        ?> 

    </section>

</body>

</html>