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
  <title>Courses</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../mind/css/style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Roboto:wght@100&family=Ultra&family=Zen+Antique+Soft&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Roboto:wght@100&family=Ultra&family=Zen+Antique+Soft&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="header" style="top: 0;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-4 col-@recommended:languages sm-3 col logo_section">
          <div class="full">
            <div class="center-desk">
              <div class="logo">
                <a href="../mind/index.php"><img src="../mind/images/logo.png" alt="#" /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
          <div class="header_information" style="right: -250px;">
            <div class="menu-area">
              <div class="limit-box">
                <nav class="main-menu ">
                  <ul class="menu-area-main" style="padding-left: 450px;">
                    <li> <a href="../mind/index.php" style="font-weight: 800;">Home</a></li>
                    <li><a href="../Login Page 2/logout.php" style="font-weight: 800;">logout</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="home">
    <h1 class="h-primary">Our Courses</h1>
    <P style="color: rgb(51, 87, 206); font-size: 2.2rem; line-height: 3.2rem;">Join "mindEducation" for free and learn
      online and your build skills</P>
  </section>
  <section class="services-container">
    <form action="./course.php" method="post">
    <h1 class="h-primry center"></h1>
    <div id="services">
      <div class="box">
        <img src="./images/c.png" alt="">
        <h2 class="h-secondary center">C Programming</h2>
        <p class="center"></p>
        <center><button class="bttn" name="cbutton">Learn Now</button></center>
      </div>
      <div class="box">
        <img src="./images/index.jpg" alt="">
        <h2 class="h-secondary center">Java Programming</h2>
        <p class="center"></p>
        <center><button class="bttn" name="jbutton">Learn Now</button></center>
      </div>
      <div class="box">
        <img src="./images/python.jpg" alt="">
        <h2 class="h-secondary center">Python Programming</h2>
        <p class="center"></p>
        <center><button class="bttn" name="pbutton">Learn Now</button></center>
      </div>
      <div class="box">
        <img src="./images/DSA.png" alt="">
        <h2 class="h-secondary center">DSA Programming</h2>
        <p class="center"></p>
        <center><button class="bttn" name="dbutton">Learn Now</button></center>
      </div>
      <div class="box">
        <img src="./images/sqll.jpg" alt="">
        <h2 class="h-secondary center">SQL</h2>
        <p class="center"></p>
        <center><button class="bttn" name="sbutton">Learn Now</button></center>
      </div>
      <div class="box">
        <img src="./images/ds.jpg" alt="">

        <h2 class="h-secondary center">Data Science</h2>
        <p class="center"></p>
        <center><button class="bttn" name="databutton">Learn Now</button></center>
      </div>
    </div>
    </form>
  </section>
</body>

</html>