<?php 
session_start();

error_reporting(0);
?>
<html>
    <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/homepage.css">
  <title>Home Page</title>
</head>
<body>
  <!-- ======== HEADER ======== -->
  <header id="header">
    <div class="logo"><a href="#"><i class="bx bx-bone"></i></a></div>
    <nav class="navbar">
      <ul class="nav__items">
        <?php
          if($_SESSION['cat'] == 'doctor')
          {
            ?>
              <li class="nav__item"><a href="Ddashboard.php"> DOCTORDASHBOARD</a></li>
            <?php
          }
          else
          {
            ?>
              <li class="nav__item"><a href="Udashboard.php"> USERDASHBOARD</a></li>
            <?php
          }
        ?>
        <li class="nav__item"><a href="#home">HOME</a></li>
        <li class="nav__item"><a href="#services">SERVICES</a></li>
        <li class="nav__item"><a href="#about">ABOUT</a></li>
        <li class="nav__item"><a href="contact.php">CONTACT</a></li>
        <li class="nav__item"><a href="#testimonials">TESTIMONY</a></li>
        <li class="nav__item"</li>
        
          <?php
          if($_SESSION['userid'])
          {
            ?>
            <li class="nav__item"><a href="logout.php">LOGOUT</a></li>
            <?php
          }
          else
          {
            ?>
            <li class="nav__item"><a href="login.php">LOGIN</a></li>
            <?php
            }
            ?>

        
        <div class="nav__item themecolor" title="change theme">
          <i class='bx bxs-sun' title="light mode"></i>
          <i class='bx bxs-moon' title="dark  mode"></i>
        </div>
      </ul>
    </nav>
    <div class="open_close_menu__container">
      <i class="bx bx-menu"></i>
      <i class="bx bx-x"></i>
    </div>
  </header>
  <!-- ======== MAIN ======== -->
  <main>
    <!-- SECTION 1 -->
    <section id="home" class="section_0">
      <div class="section_1">
      <div class="container-fluied">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/dog.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vet Ventures</h3>
          <p>Paw-sitive Care for Your Beloved Fur Babies.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/cat.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vet Ventures</h3>
          <p>The Perfect Harmony of Care and Joy for Pets.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/rabbit.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vet Ventures</h3>
          <p>Until one has loved an animal a part of one's soul remains unawakened. </p>
        </div>
      </div>

      <div class="item">
        <img src="img/Bird.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vet Ventures</h3>
          <p>Neutering your pets make them less nuts!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/cow.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vet Ventures</h3>
          <p>Pets do speak,but only to those who know how to listen.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></div>
    </section>

    <!-- SECTION 2 -->
    <section id="services" class="container">
      <h2 class="services title">SERVICES</h2>
      <div class="services__container">
        <div class="service service_1">
          <img src="https://img.freepik.com/premium-photo/vertical-shot-shih-tzu-dog-sitting-wooden-table-against-gray-wall_181624-60574.jpg" alt="dog reading a book" width="300px" height="300px">
          <div class="service_description">
            <h3 class="service_title">Vaccinations</h3>
            <p>Vaccinations play a vital role in protecting your pet from a wide range of potentially deadly diseases.</p>
          </div>
        </div>
        <div class="service service_2">
          <img src="https://img.freepik.com/free-photo/close-up-veterinary-doctor-taking-care-pet_23-2149267846.jpg?size=626&ext=jpg&ga=GA1.1.939789300.1713876727&semt=ais" alt="dog playing">
          <div class="service_description">
            <h3 class="service_title">Emergency Veterinarian</h3>
            <p>Our dedicated team of veterinarians and support staff is trained to handle a wide range of emergencies, from sudden illnesses and injuries to life-threatening conditions. </p>
          </div>
        </div>
        <div class="service service_3">
          <img src="https://images.ctfassets.net/rt5zmd3ipxai/4dEkGzl5ZwVAECfT0ToCi1/430808993a139322068185c4a0f8953a/Ginger.jpg" alt="dog washing">
          <div class="service_description">
            <h3 class="service_title">Spay / Neuter</h3>
            <p>One of the most important decisions you can make for your furry friend is to spay or neuter them.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 3 -->
    <section id="about" class="section_3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity=".5" d="M0,160L48,160C96,160,192,160,288,133.3C384,107,480,53,576,26.7C672,0,768,0,864,48C960,96,1056,192,1152,202.7C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
      <div class="about_us_container">
        <h2 class="about_us title">ABOUT US</h2>
        <p class="text about">
        Vet Ventures provides the services of a veterinarian, and facilities for the medical treatment, examination, surgery, diagnosis, grooming, general health care, and observation of domestic animals and birds.
        </p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity=".5" d="M0,160L48,160C96,160,192,160,288,133.3C384,107,480,53,576,26.7C672,0,768,0,864,48C960,96,1056,192,1152,202.7C1248,213,1344,139,1392,101.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
    </section>

    <!-- SECTION 4 -->
    <section id="testimonials" class="container">
      <h2 class="testimony_title title">TESTIMONIALS</h2>
      <div class="testimonials">
        <div class="testimony testimony_1">
          <div class="tester">
            <div class="tester_profile"></div>
            <h3 class="tester_name title">John Doe</h3>
          </div>
          <p>
          “Thank you for looking after the cats.  A note of great thanks for looking after my “babies”. I’m so happy to know they are being cared for.”
          </p>
        </div>
        <!-- - -->
        <div class="testimony testimony_2">
          <div class="tester">
            <div class="tester_profile"></div>
            <h3 class="tester_name title">Caroline</h3>
          </div>
          <p>
          “A thoroughly reliable and professional service and have used Vet Ventures several times already and plan to again in the near future.”

          </p>
        </div>
        <!-- - -->
        <div class="testimony testimony_3">
          <div class="tester">
            <div class="tester_profile"></div>
            <h3 class="tester_name title">Alex</h3>
          </div>
          <p>
          "Amazing care for my fur babies! So dependable and responsive when treating about my kids."
          </p>
        </div>
        <!-- - -->
        <div class="testimony testimony_4">
          <div class="tester">
            <div class="tester_profile"></div>
            <h3 class="tester_name title">Julie</h3>
          </div>
          <p>
            "Good service and friendly.Might use Vet Ventures again in the future.Recommended!."
          </p>
        </div>
        <!-- - -->
      </div>
      <div class="bones">
        <i class="fas fa-bone bone1"></i>
        <i class="fas fa-bone bone2"></i>
        <i class="fas fa-bone bone_c"></i>
        <i class="fas fa-bone bone3"></i>
        <i class="fas fa-bone bone4"></i>
      </div>
    </section>

    <!-- SECTION 5 -->
    <footer>
      <div class="top__footer container">
        <div class="footer__container following">
          <h2 class="title footer__title">FOLLOW US</h2>
          <div class="sub_footer_container social_media_links">
            <i class="bx bxl-facebook-square"></i>
            <i class="bx bxl-instagram"></i>
            <i class="bx bxl-twitter"></i>
          </div>
        </div>

        <div class="footer__container address">
          <h2 class="title footer__title">ADDRESS</h2>
          <div class="sub_footer_container address_credentials">
            <h3 class="place">Bel road, st18</h3>
            <h3 class="email">Vetventures@yahoo.com</h3>
            <h3 class="tel">+91 9845672318</h3>
          </div>
        </div>

        <div class="footer__container services_footer">
          <h2 class="title footer__title">SERVICES</h2>
          <div class="sub_footer_container services_lists">
            <h3>Vaccinations</h3>
            <h3> Emergency veterinarians</h3>
            <h3>Spay/Neuter</h3>
          </div>
        </div>
      </div>

      <div class="end__footer container">
        <div class="copyright">
          <span>copyright © 2024, VET VENTURES</span>
    </footer>
  </main>
  <script src="js/homepage.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>  