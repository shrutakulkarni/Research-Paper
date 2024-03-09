<?php
include "dbconnection.php"
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
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="assets/script.js"></script>
    <title>Call For Paper</title>
</head>
<body>
<script>
     const queryString =window.location.search;
     console.log(queryString );
     const urlParams = new URLSearchParams(queryString);
     const get=urlParams.get("upload");
    
     if(get==1){
        alert("thanks for submitting");
     }
     else if(get==0){
        alert("not submitted");
     }
    </script>
    
    <nav style="padding:8px 0px;font-size :16px;;" class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="true"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
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
                        <a style="color: white;" class="nav-link active" href="#">Call For Paper</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white; float: inline-end; border-left: solid 2px #fff; "
                            class="nav-link active" href="#"><i style="font-size:15px" class="fa fa-search"></i> Search
                            Here</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header Banner -->
    <div class="section">
        <div style="padding: 0px;margin: 0px;" class="container">
            <div class="row">
                <div class="about" data-aos="zoom-out" data-aos-duration="3000">
                    Call For Paper
                </div>
            </div>
        </div>
    </div>
       <main class="row">
           <section>
               <div class="container">
                   <h2>Call For Paper</h1>
               </div>
               <div class="container main-content">
                    <img src="assets/main.jpg" alt="main-image" class="main-image">
                    <p><strong>Upload Date: July 15, 2021</strong><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas animi ratione quidem obcaecati vel facilis dolorem illum hic a! Expedita nihil quas vel explicabo iusto veritatis laudantium reprehenderit tempora quam! Journal of Psychology encourages manuscripts that contributr toward knowledge of Asian American Psychology through Research</p>
               </div>
           </section>
        </main>
           <section class="section-form row">
            <div class="row">
                <h2>Search For paper</h2>
            </div>
            <div class="row">
                <form action="client_entry.php" method="post" enctype="multipart/form-data" class="contact-form">
                    <div class="row item">
                        <div class="col span-1-of-3">
                            <label for="name">Name of Author</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="uname" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col span-1-of-3">
                            <label for="title">Title of Paper</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="title" id="email" placeholder="Title" required>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col span-1-of-3">
                            <label for="find-us">Type if interest</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="type" id="email" placeholder="Type" required>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col span-1-of-3">
                            <label for="email">Upload</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="file" name="demo" id="email">
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </section>

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
                            <li data-aos="fade-left" data-aos-duration="1000"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
              <li data-aos="fade-right" data-aos-duration="1000"><a href="#"><i class="fab fa-instagram-square"></i></a></li>
              <li data-aos="fade-left" data-aos-duration="1000"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
              <li data-aos="fade-right" data-aos-duration="1000"><a href="#"><i class="fab fa-linkedin"></i></a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>  
</body>
</html>