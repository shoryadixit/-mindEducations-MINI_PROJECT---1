<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>mind</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">

  

</head>

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-2 col-lg-4 col-md-4 col-@recommended:languages sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
            <div class="header_information">
              <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="./index.php" style="font-weight: 550;">Home</a> </li>
                      <li> <a href="../Course Section/courseindex.php" style="font-weight: 550;"> Courses </a> </li>
                      <li> <a href="#about" style="font-weight: 550;">About</a> </li>
                      <?php
                        if (isset($_SESSION['user'])){
                          echo '<li> <a href="../Profile Page/studentProfile.php">My Profile</a> </li>';
                        } else if(isset($_SESSION['tutoruser'])){
                          echo '<li> <a href="../tutor login/welcome.php" style="font-weight: 550;">Tutor Profile</a> </li>';
                        } else {
                          echo '<li> <a href="../tutor login/index.php" style="font-weight: 550;">Tutor Login</a> </li>';
                        }
                      ?>
                      <li> <a href="#contact" style="font-weight: 550;">Contact</a> </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="mean-last">
                <?php
                  if(isset($_SESSION['user']) || isset($_SESSION['tutoruser'])){
                    echo'<a href="../Login Page 2/logout.php" name="logout" type="submit" id="logout" style="font-size: 16px; font-weight: 500; display: inline-block;">LogOut</a>';
                  } else {
                    echo '<a href="../Login Page 2/index.html" id="login" style="font-size: 16px; font-weight: 500;">login/sign up</a>';
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- end header inner -->

      <!-- end header -->
      <section class="slider_section">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">

              <div class="container-fluid padding_dd">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                      <div class="text-bg">
                        <h1>Search your Favorite Course here</h1>
                        <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                        <a href="#">Read more</a> <a href="#">get a qoute</a>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="images_box">
                        <figure><img src="images/img2.png"></figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

    </section>
    </div>
  </header>



  <!-- about  -->
  <div id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="about-box">
            <h2>About <strong class="yellow">Our Mission</strong></h2>
            <p>“Students do not learn much just sitting in classes listening to teachers, 
              memorizing prepackaged assignments, and spitting out answers. They must talk 
              about what they are learning, write reflectively about it, relate it to past
              experiences, and apply it to their daily lives. They must make what they learn
              part of themselves.”
            </p>
            <a href="Javascript:void(0)">Read more</a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="about-box">
            <figure><img src="images/about.jpg" alt="#" /></figure>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end abouts -->



  <!-- our -->
  <div id="important" class="important">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>Some <strong class="yellow">important facts</strong></h2>
            <span>"Online learning is rapidly becoming one of the most cost-effective ways to educate the world’s rapidly expanding workforce."</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- end our -->
  <!-- Courses -->
  <div id="courses" class="Courses">
    <div class="container-fluid padding_left3">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="box_bg">
            <div class="box_bg_img">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="box_my">
                    <figure><img src="images/my1.jpg"></figure>
                    <div class="overlay">
                      <h3>Data Structures</h3>
                      <p>Data Structure is a way to store and organize data so that it can be used efficiently.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="box_my">
                    <figure><img src="images/my2.jpg"></figure>
                    <div class="overlay">
                      <h3>Cinematography</h3>
                      <p>cinematography, the art and technology of motion-picture photography.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="box_my">
                    <figure><img src="images/my3.jpg"></figure>
                    <div class="overlay">
                      <h3>Skills</h3>
                      <p>Skills are the expertise or talent needed in order to do a job or task. ... </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="box_my">
                    <figure><img src="images/my4.jpg"></figure>
                    <div class="overlay">
                      <h3>Teaching Science</h3>
                      <p>Scientific teaching is a pedagogical approach used in undergraduate science 
                        classrooms whereby teaching and learning is approached with the same rigor as 
                        science itself.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
          <div class="box_text">
            <div class="titlepage">
              <h2>Our<strong class="yellow"> Courses</strong></h2>
            </div>
            <p>"Our Online Courses provides fantastic flexibility, among other benefits, and aids in 
              making the task of arranging development opportunities far easier. In addition, the 
              ability for users to have access to content when needed provides the just in time 
              element that is so critical to corporate job applicability. Adult learners want 
              learning to be specific to their job, quick and have merit, and using an online 
              platform allows users to learn at their own pace and use when needed. It is a win for all."
            </p>
            <a href="../Project2/index.html">Courses</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Courses -->

  <!-- learn -->


  <div id="learn" class="learn">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>Learn <strong class="yellow">the Practical way</strong></h2>
            <span>packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
              ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
              sometimes by accident, sometimes on purpose (injected humour and the like).</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="learn_box">
            <figure><img src="images/img.jpg" alt="img" /></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MAKE -->
  <div class="make">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2>Make Your <strong class="white_colo">Courses Standout</strong></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
          <div class="make_text">
            <p>
            </p>

            <?php  
              if(!isset($_SESSION['is_login'])){
                echo '<a href="../Login Page 2/index.html">Strat now</a>';
              } else {
                echo '<a href="../Course Section/index.html">Courses</a>';
              }
            ?>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
          <div class="make_img">
            <figure><img src="images/make_img.jpg"></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end MAKE -->
  <!-- end learn -->


  <!-- contact -->
  <div id="contact" class="contact">
    <div class="container-fluid padding_left2">
      <div class="white_color">
        <div class="row">

          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div id="map">
            </div>

          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            
            <?php
              if (isset($_POST['send'])){
                $c_name = $_POST['Name'];
                $c_email = $_POST['Email'];
                $c_phone = $_POST['Phone'];
                $c_message = $_POST['Message'];

                if($c_name && $c_email && $c_phone && $c_message != ""){
                  $sql= "INSERT INTO contact (username, email, phone, message) VALUES ('$c_name','$c_email','$c_phone','$c_message')";
                  $result = mysqli_query(mysqli_connect("localhost", "root", "", "login_register") ,$sql);
                  if ($result){
                    echo "<script>alert('We wil contact you soon !!!')</script>";
                  }                  
                } else {
                  echo "<script>alert('Please fill all details !!!')";
                }
              }
            ?>
            <form class="contact_bg" action="./index.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="titlepage">
                    <h2>Contact <strong class="yellow">us</strong></h2>
                  </div>
                  <div class="col-md-12">
                    <input class="contactus" placeholder="Your Name" type="text" name="Name">
                  </div>
                  <div class="col-md-12">
                    <input class="contactus" placeholder="Your Email" type="text" name="Email">
                  </div>
                  <div class="col-md-12">
                    <input class="contactus" placeholder="Your Phone" type="text" name="Phone">
                  </div>
                  <div class="col-md-12">
                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <button class="send" name="send">Send</button>
                  </div>
                </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <?php
              if(isset($_POST['subscribe'])){
                
              }              
            ?>
            <div class="col-md-12">
              <form class="news" action="./index.php" method="POST">
                <input class="newslatter" placeholder="Email" type="text" name=" Email">
                <button class="submit" name="subscribe">Subscribe</button>
              </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact us </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/email.png" alt="#" /></a>mindeductions@gmail.com
                      </li>
                      <li>
                        <a href="#"><img src="icon/call.png" alt="#" /></a>+1234567890
                      </li>
                    </ul>
                    <ul class="social_link">
                      <li><a href="#"><img src="icon/fb.png"></a></li>
                      <li><a href="#"><img src="icon/tw.png"></a></li>
                      <li><a href="#"><img src="icon/lin(2).png"></a></li>
                      <li><a href="#"><img src="icon/instagram.png"></a></li>
                    </ul>

                  </div>
                </div>
                
                

                <div class="col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <a href="index.html"> <img src="images/logo1.jpg" alt="logo"></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footr>



    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {
            lat: 27.69019398570655, 
            lng: 77.59569598358729
          },
        });

        var image = 'images/maps-and-flags.png';
        var beachMarker = new google.maps.Marker({
          position: {
            lat: 40.645037,
            lng: -73.880224
          },
          map: map,
          icon: image
        });
      }
    </script>
    <!-- google map js -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->


</body>

</html>