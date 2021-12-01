<?php
session_start();
include ('../Login Page 2/dbConnection.php');

if (!isset($_SESSION['user'])){
  echo "<script>alert('Please, First Login !!!')</script>";
  header('Location: ../mind/index.php');
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
                    <li> <a href="../Course Section/index.php" style="font-weight: 550; padding-right: 30px;">Courses</a> </li>
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
          <p style="font-size: 2.7rem; color: black"><u>Your Profile</u></p>
          <img src="./user.png" style="width: 90%; position: absolute; margin-right: 40px; top: 60px;">
        </div>
        <div class="EditProfile_itemcontainer" style="position: absolute; top: 200px;">
          <?php
            $uname = $_SESSION['user'];
            $emailsearch = "SELECT * FROM student WHERE stu_name='$uname' and status='active'";
            $query = mysqli_query($conn, $emailsearch);
            $email_pass = mysqli_fetch_assoc($query);
          ?>
          <div class="EditProfile_title" style="font-size: 2.7rem; color: black;"><?php echo $email_pass['stu_name']; ?></div>
          <div class="user_ProfileEmail" style="font-size: 1.2rem; color: black; padding-bottom: 17px;">
          <?php echo $email_pass['stu_email']; ?>
          </div>
          <div class="user_mobilenumber" style="font-size: 1.2rem; color: black;"><?php echo $email_pass['mobile_number']; ?></div>
          <div class="user_ProfileMobileNumber">
            <form action="./studentProfile.php" method="post">
              <span id="msg1">Enter Your mobile number with country code</span><br>
              <input type="phone" id="phone" name="phone" type="tel" placeholder="Mobile number"
              style="background: #dbd9d9; 
              outline: none;
              border: 1px solid #b8b4b4;
              padding: 7px;
              margin-top: 10px;
              border-radius: 5px;">
              <button type="submit" name="submit" style="padding: 7px; margin-left: 5px; border-radius: 5px;">Update</button><br>
              <?php
                if(isset($_POST['submit'])){
                  $unumber = $_POST['phone'];
                  if ($unumber != ""){                  
                    $update = "UPDATE student SET mobile_number='$unumber' WHERE stu_name='$uname'";
                    $update_query = mysqli_query($conn, $update);
                    if($update_query){
                      echo "<span>Mobile Number updated Succesfully !!!</span>";
                      header('Location: studentProfile.php');
                    } else {
                      echo "<span>Mobile Number not Updated !!!</span>";
                      header('Location: studentProfile.php');
                    }
                  }else {
                    echo "<span>Enter Your Mobile Number !!!</span>";
                  }
                } 
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  


</body>

</html>
