<?php
include "dbconnection.php";
$query = "SELECT * FROM `client_entry` WHERE `status` = 1";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/stylef.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="assets/script.js"></script>
  <title>Home</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" href="About.html">About</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" href="article.html">Article & Issues</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" href="researches.html">Researches</a>
          </li>
          <li class="nav-item">
            <a style="color: white;" class="nav-link active" href="callforpaper.php">Call For Paper</a>
          </li>
          <li class="nav-item">
            <a style="color: white; float: inline-end; border-left: solid 2px #fff; " class="nav-link active" href="#"><i style="font-size:15px" class="fa fa-search"></i> Search
              Here</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Banner -->
  <div class="section" style="overflow-x: hidden;overflow-y: hidden;">
    <div class="container-fluid" style="padding-top:200px; ">
      <div class="row">
        <div class="col-md-3">
          <div class="textbox">
            <p><b>Research is formalized
                curiosity.It is poking and
                prying with a purpose.</b></p>
            <button style="border-radius: 10px;width: fit-content; height: 25px; background-color: transparent; color: white; border: 1px solid white;"><b>continue
                Reading</b></button>
          </div>
        </div>
        <div class="col-md-3" data-aos="fade-right" data-aos-duration="1000" style="overflow-x: hidden;">
          <p id="navtextbox" class="navtextbox"><b>Executive Editor
              <u> DR.Edward Thomas</b></u>
          </p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" style="overflow-x: hidden;">
          <p id="navtextbox1" class="navtextbox"><b>submission id
              <u>jen@iosrmail.org</b></u>
          </p>
        </div>
        <div class="col-md-3" data-aos="fade-left" data-aos-duration="1000" style="overflow-x: hidden;">
          <p id="navtextbox2" class="navtextbox"><b>ISSN<br>
              <u> 2250-3021</b></u>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <div class="container-fluid" style="background-color: rgba(0,0,0,0); margin: 0%!important; overflow-x: hidden;">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="font-family:Courier New;font-size: 40px;margin: px;"><b>Catogries</b></h1>
        <div data-aos="zoom-in-left" data-aos-duration="1000" style="overflow-x: hidden;">
          <div class="column">
            <button onclick="news()" id="btn1" style="font-family: 'Courier New';background-color: #cecece;color: #313131; margin-left:30px;border:1px solid black ; width:120px;height:40px;border-radius: 10px;"><b>News</b></button>
            <button onclick="researches()" id="btn2" style="font-family: 'Courier New';background-color: #cecece;color: #313131; margin-left:30px;border:1px solid black ; width:120px;height:40px;border-radius: 10px;"><b>Research</b></button>
            <button onclick="journals()" id="btn3" style="font-family: 'Courier New';background-color: #cecece;color: #313131; margin-left:30px;border:1px solid black ; width:120px;height:40px;border-radius: 10px;"><b>Journals</b></button>
            <button onclick="publish()" id="btn4" style="font-family: 'Courier New';background-color: #cecece;color: #313131; margin-left:30px;border:1px solid black ; width:120px;height:40px;border-radius: 10px;"><b>Publish</b></button>
          </div>
        </div>
        <!-- news -->
        <div id="news" style="margin-left: 0px; display: none;" class="container-fluid" data-aos="zoom-in-left" data-aos-duration="1000">
          <h1 style="font-family:Courier New;font-size:40px;"><b>News</b></h1>
          <div class="row">
            <button style=" font-family: 'cambria';background-color: white; color: #313131;  border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">News</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ; border-bottom: 2px solid #313131;width:150px;height:40px;">Research</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Journals</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Publish</button>
          </div>
          <div class="container-fluid">
            <div class="row">
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:18px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <div class="row-sm-2">
                <p style="width:200px;   font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              </div>
            </div>
          </div>
        </div>
        <!-- researches -->
        <div id="researches" style="margin-left: 0px;" class="container-fluid" data-aos="zoom-in-left" data-aos-duration="1000">
          <h1 style="font-family:Courier New;font-size:40px;"><b>Researches</b></h1>
          <div class="row">
            <button style=" font-family: 'cambria';background-color: white; color: #313131;  border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">News</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ; border-bottom: 2px solid #313131;width:150px;height:40px;">Research</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Journals</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Publish</button>
          </div>
          <div class="container-fluid">
            <div class="row">
              <?php
              if ($result) {
                while ($rows = mysqli_fetch_assoc($result)) {
              ?>
                  <p style="width:200px;font-family: segoe ui;"><?php echo $rows["ftitle"]; ?><img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:18px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <!-- journals -->
        <div id="journals" style="margin-left: 0px; display: none;" class="container-fluid" data-aos="zoom-in-left" data-aos-duration="1000">
          <h1 style="font-family:Courier New;font-size:40px;"><b>Journals</b></h1>
          <div class="row">
            <button style=" font-family: 'cambria';background-color: white; color: #313131;  border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">News</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ; border-bottom: 2px solid #313131;width:150px;height:40px;">Research</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Journals</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Publish</button>
          </div>
          <div class="container-fluid">
            <div class="row">
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:18px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <div class="row-sm-2">
                <p style="width:200px;   font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              </div>
            </div>
          </div>
        </div>
        <!-- publish -->
        <div id="publish" style="margin-left: 0px; display: none;" class="container-fluid" data-aos="zoom-in-left" data-aos-duration="1000">
          <h1 style="font-family:Courier New;font-size:40px;"><b>Publish</b></h1>
          <div class="row">
            <button style=" font-family: 'cambria';background-color: white; color: #313131;  border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">News</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ; border-bottom: 2px solid #313131;width:150px;height:40px;">Research</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Journals</button>
            <button style="font-family: 'cambria';background-color: white; color: #313131; border:1px solid white ;border-bottom: 2px solid #313131; width:150px;height:40px;">Publish</button>
          </div>
          <div class="container-fluid">
            <div class="row">
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:18px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <p style="width:200px;font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              <div class="row-sm-2">
                <p style="width:200px;   font-family: segoe ui;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Quisque eu ipsum nec nulla rhoncus accumsan a porttitor erat.<img style="margin-left:100px;width:15px;height:17px;" src="assets/Icon feather-do.png"><img style="margin-left:20px;width:15px;height:20px;" src="assets/Path 1.png">2650 views</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="rgt" class="container-fluid col-sm-4" style="background-color:#CECECE; overflow-x: hidden;">
        <h1 style="font-family:Courier New;font-size: 30px;margin: 15px;"><b>Top Researches :</b></h1>
        <div class="row">
          <div data-aos="fade-left" data-aos-duration="1500" style="overflow-x: hidden;">
            <div id="cnt" class="card mb-3" style=" border-color: #CECECE;background-color:#CECECE;height: fit-content;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img style="height: 120px; width:150px;" src="assets/Rectangle 20.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum doloramet,consectetur adipiscing.</p>
                  </div>
                </div>
              </div>
            </div>
            <div id="cnt1" class="card mb-3" style=" border-color:#CECECE;background-color:#CECECE;height: fit-content;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img style="height: 120px; width:150px;" src="assets/Rectangle 20.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum doloramet,consectetur adipiscing.</p>
                  </div>
                </div>
              </div>
            </div>
            <div id="cnt2" class="card mb-3" style=" border-color:#CECECE;background-color:#CECECE;height: fit-content;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img style="height: 120px; width:150px;" src="assets/Rectangle 20.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum doloramet,consectetur adipiscing.</p>
                  </div>
                </div>
              </div>
            </div>
            <h1 style="font-family:Courier New;font-size: 30px;"><b>Top News :</b></h1>
            <div id="cnt3" class="card mb-3" style=" border-color:#CECECE;background-color:#CECECE;height: fit-content;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img style="height: 120px; width:150px;" src="assets/Rectangle 21.png" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum doloramet,consectetur adipiscing.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer" style="overflow-x: hidden; overflow-y: hidden;">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 footercol">
          <img src="assets/LOGO.png" class="img-fluid" alt="LOGO" style="color:#cbcbcb">
          <p style="color: #cbcbcb;font-size:12px ;">Lorem Inpsum neoks klsisc </p>
        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 footercol">
          <h4>Information</h4>
          <ul>
            <li><a href="#">About researches</a></li>
            <li><a href="#">About article</a></li>
            <li><a href="#">About Upcoming Article/Research</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 footercol">
          <h4>Reasearch Paper</h4>
          <ul>
            <li><a href="#">Call for Paper</a></li>
            <li><a href="#">Paper Publishing Date</a></li>
            <li><a href="#">Published Paper</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 footercol">

          <div class="social-links">
            <ul>
              <li data-aos="fade-left" data-aos-duration="1000" style="overflow-x: hidden;"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li data-aos="fade-right" data-aos-duration="1000" style="overflow-x: hidden;"><a href="#"><i class="fab fa-instagram-square"></i></a></li>
              <li data-aos="fade-left" data-aos-duration="1000" style="overflow-x: hidden;"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
              <li data-aos="fade-right" data-aos-duration="1000" style="overflow-x: hidden;"><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col copyright">
          <p>©️ 2021 SK AI Technologies & Solutions | All Rights Reserve</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>