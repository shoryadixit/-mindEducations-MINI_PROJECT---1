<?php 

session_start();

include "./config.php";

if (!isset($_SESSION['tutoruser'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
  <link rel="stylesheet" href="../mind/css/style.css">


  <style>
        .foruser{
            position: absolute;
            top: 350px;
            right: 780px;
            border: 2px solid black;
            color: black;
            background-color: white;
            border-radius:18px;
            width: 350px;
            float: left;
            height: 220px;
            margin-bottom: 100px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);
        }

        input{
            outline: none;
            position: inherit;
            padding: 17px;
        }
        span{
          position: absolute;
          right: 250px;
          font-size: .6rem;
        }
  </style>
</head>

<body style="background: #d1cece;">
  <div class="header" style="top: 0;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-4 col-@recommended:languages sm-3 col logo_section">
          <div class="full">
            <div class="center-desk">
              <div class="logo">
                <a href="index.html"><img src="../mind/images/logo.png" alt="#" /></a>
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
                    <li> <a href="../mind/index.php" style="font-weight: 550; padding-right: 30px;">Home</a></li>
                    <li> <a href="../Course Section/courseindex.php" style="font-weight: 550; padding-right: 30px;">Courses</a> </li>
                    <li> <a href="../Login Page 2/logout.php" style="font-weight: 550; padding-right: 30px;">Logout</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-content">
    <div class="EditProfile_container">
      <img src="./Capture.JPG" alt="" style="float: right; width: 37%;">
      <div class="EditProfile_content" style="display: flex; justify-content: center; align-items: end;">
        <div class="profileheader" style="position: absolute; top: 122px; left: 29px;">
          <p style="font-size: 2.7rem; color: black"><u>Tutor Profile</u></p>
          <img src="./user.png" style="width: 90%; position: absolute; margin-right: 40px; top: 60px;">
        </div>
        <div class="EditProfile_itemcontainer" style="position: absolute; top: 200px;">
          <?php
            $uname = $_SESSION['tutoruser'];
            $emailsearch = "SELECT * FROM tutor WHERE username='$uname' and status='active'";
            $query = mysqli_query($conn, $emailsearch);
            $email_pass = mysqli_fetch_assoc($query);
          ?>
          <div class="EditProfile_title" style="font-size: 2.7rem; color: black;">Name: <?php echo $email_pass['username']; ?></div>
          <div class="user_ProfileEmail" style="font-size: 1.2rem; color: black; padding-bottom: 17px;">Email :
          <?php echo $email_pass['email']; ?>
          <div style="font-size: 1.2rem; color: black; padding-bottom: 17px;">Upload course for user : </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

    <section class="section">
    <div class="foruser">
        <form action="./upload.php" method="POST" enctype="multipart/form-data">
            <h4 style="padding: 20px">Name Of the Course: <input type="text" name="cname" placeholder="Enter Course Name" style="padding: 7px;"></h4>
            <input type="file" name="inputpdf" id="inputpdf" required ><span> Upload .pdf File</span>
            <input type="file" name="inputimg" id="inputimg" required><span>Upload thumbnail</span>
            <button type="submit" name="upload" class="inputupload">Upload</button>
        </form>
    </div>
    </section>
    
</body>
</html>
