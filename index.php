<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Demo</title>
  <!-- main css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- responsive css -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  
  <!-- default skin -->
  <link rel="stylesheet" class="alternate-style" type="text/css" href="css/skins/lavender.css">
  
    <!-- boxicons css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- lightgallery css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"/>
  
    <!--Animasi-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/66a49d4c76.js" crossorigin="anonymous"></script>
</head>
<body class="bg">
     
  <!--audio-controls button start-->
  <button id="playPauseBTN" class="btnAudio" onclick="playAudio()">
  <i class='bx bx-play-circle audio-icon'></i>
  </button>
  <!--audio-controls button end-->
  
<!--header start-->
  <header class="header hide" id="header">
     <nav class="nav container">
     <a href="index.php" class="nav-logo">Our Wedding
     </a>
     <!--navbar start-->
     <div class="nav-menu" id="nav-menu">
          <ul class="nav-list">
          <!--link item start-->
          <li class="nav-item">
          <a href="#home" data-scroll-nav="0" class="nav-link active-link">
          <i class="fa-solid fa-house nav-icon"></i>
          <span class="nav-name">Home</span>
          </a>
          </li>
          <!--link item end-->
          
          <!--link item start-->
          <!--<li class="nav-item">
          <a href="#couple" data-scroll-nav="1" class="nav-link">
          <i class="fa-solid fa-rings-wedding"></i>
          <span class="nav-name">Home</span>
          </a>
          </li>-->
          <!--link item end-->
          
          <!--link item start-->
          <li class="nav-item">
          <a href="#story" data-scroll-nav="2" class="nav-link">
          <i class="fa-solid fa-bars-staggered nav-icon"></i>
          <span class="nav-name">Story</span>
          </a>
          </li>
          <!--link item end-->
          
          <!--link item start-->
          <li class="nav-item">
          <a href="#event" data-scroll-nav="3" class="nav-link">
          <i class="fa-solid fa-calendar-days nav-icon"></i>
          <span class="nav-name">Event</span>
          </a>
          </li>
          <!--link item end-->
          
          <!--link item start-->          
          <li class="nav-item">
          <a href="#gallery" data-scroll-nav="4" class="nav-link">
          <i class="fa-solid fa-image nav-icon"></i>
          <span class="nav-name">Gallery</span>
          </a>
          </li>
          <!--link item end-->
          
          <!--link item start-->
          <li class="nav-item">
          <a href="#rsvp" data-scroll-nav="5" class="nav-link">
          <i class="fa-solid fa-message nav-icon"></i>
          <span class="nav-name">Messages</span>
          </a>
          </li>
          <!--link item end-->
          </ul>
     </div>
     </nav>
  </header>
  <!--header end-->
  <!--home-section start-->
  <section class="home-section" id="home" data-scroll-index="0">
     <div class="container">
     <div class="row">
     <div class="home-content">
     <!--home-content item-->
     <p>We're Getting Married</p>
     <h1>John & Jane</h1>
                  
     <!--Couple Banner-->
     <img class="couple-banner" src="img/bg/couple.png">
                  
     <!--countdown-->
     <div class="countdown">
     <div class="container-day">
      <h2 class="days">00</h2>
      <small>Day</small>
     </div>
               
     <!--countdown item-->
     <div class="container-hour">
     <h2 class="hours">00</h2>
     <small>Hour</small>
     </div>
     
     <div class="container-minute">
     <h2 class="minutes">00</h2>
     <small>Minute</small>
     </div>
     
     <div class="container-second">
     <h2 class="seconds">00</h2>
     <small>Second</small>
     </div>
     </div>
     <!--countdown-end-->
     
     </div>
     </div>
     </div>
  </section>
  <!--home-section end-->
   
  <!--couple-section start-->
  <section class="couple-section" id="couple" data-scroll-index="1">
     <div class="container">
     <div class="row">
     <div class="section-title">
          
     <!--pray section-->
     <img src="img/bismillah.png" class="bismillah"/>
     <p class="pray">
     <blockquote>
     <q>Untuk melaksanakan syariat agama-Mu, mengikuti sunnah rasul-Mu dalam membangun sebuah rumah tangga yang sakinah, serta memiliki keturunan - keturunan shaleh dan shalehah yang senantiasa tunduk pada-Mu dan berbakti kepada orang tua, perkenankanlah kami.
     </q>
     </blockquote> 
     </p>
     </div>
     </div>
     <!--pray section-->
     
     <!--couple-content-->
     <div class="row">
     <!--man-->
     <div class="couple" data-aos="zoom-in-up" data-aos-duration="4000">
     <img src="img/groom.jpg">
     <h3>John Doe</h3>
     <p>Lorem ipsum dolor sit amet</p>
     </div>
     <!--man end-->
     
     <!--woman start-->
     <div class="couple" data-aos="zoom-in-up" data-aos-duration="7000">
     <i class='bx bxs-heart'></i>
     <img src="img/brides.jpg">
     <h3>Jane Doe</h3>
     <p>Lorem ipsum dolor sit amet.</p>
     </div>
     <!--woman end-->
     </div>
     <!--couple-end-->
     </div>
   </section>
   <!--couple-section end-->
   
   <!--story-section start-->
   <section class="story-section" id="story" data-scroll-index="2">
     <div class="container">
     <div class="row">
     <div class="section-title">
     <h2>Our Love Story</h2>
     </div>
     </div>
     <div class="row">
     <div class="story-content">
     <div class="row">
     <!--STORY ITEM START-->
     <div class="story-item">
     <i class='bx bx-heart-circle'></i>
     <div class="story-text">
     <h3>First Meet</h3>
     <span class="date">29 April 2022</span>
     <!--story-text item-->
     <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tempore iste totam. Cupiditate quibusdam quidem ullam maxime recusandae labore voluptatum nesciunt fugiat. Nisi consectetur explicabo aspernatur non, commodi dignissimos velit at minima quibusdam reiciendis? Excepturi sed consequatur unde, autem, similique ipsum nobis quae maxime officiis reiciendis suscipit iure fugiat rem.</p>

     <button class="btn-1" onclick="readMore(this)">Read More</button>
     </div>
     <div class="story-img" data-aos="zoom-in-up" data-aos-duration="4000">
     <img src="img/story/story-1.jpg">
     </div>
     </div>
     <!--STORY ITEM END-->
                  
     <!--STORY ITEM START-->
     <div class="story-item">
     <i class='bx bx-heart-circle'></i>
     <div class="story-text">
     <h3>First Date</h3>
     <span class="date">21 Juni 2022</span>
     <!--story-text item-->
     <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tempore iste totam. Cupiditate quibusdam quidem ullam maxime recusandae labore voluptatum nesciunt fugiat. Nisi consectetur explicabo aspernatur non, commodi dignissimos velit at minima quibusdam reiciendis? Excepturi sed consequatur unde, autem, similique ipsum nobis quae maxime officiis reiciendis suscipit iure fugiat rem.</p>
     
     <button class="btn-1" onclick="readMore(this)">Read More</button>
     </div>
     <div class="story-img" data-aos="zoom-in-up" data-aos-duration="6000">
     <img src="img/story/story-2.jpg" alt="" />
     </div>
     </div>
     <!--STORY ITEM END-->

     <!--STORY ITEM START-->
     <div class="story-item">
     <i class='bx bx-heart-circle'></i>
     <div class="story-text">
     <h3>Engagement</h3>
     <span class="date">20 March 2022</span>
     <!--story-text item-->
     <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tempore iste totam. Cupiditate quibusdam quidem ullam maxime recusandae labore voluptatum nesciunt fugiat. Nisi consectetur explicabo aspernatur non, commodi dignissimos velit at minima quibusdam reiciendis? Excepturi sed consequatur unde, autem, similique ipsum nobis quae maxime officiis reiciendis suscipit iure fugiat rem.</p>

     <button class="btn-1" onclick="readMore(this)">Read More</button>
     </div>
     <div class="story-img" data-aos="zoom-in-up" data-aos-duration="8000">
     <img src="img/story/story-3.jpg">
     </div>
     </div>
     <!--STORY ITEM END-->
                  
     <!--STORY ITEM START-->
     <!--<div class="story-item">
     <i class="fas fa-heart"></i>
     <div class="story-text">
     <h3>Lamaran</h3>
     <span class="date">7 May 2023</span>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in maximus diam. Pellentesque massa libero, pellentesque et dolor ut, auctor varius velit. Nulla aliquam ut neque pharetra laoreet. Fusce rhoncus tempus mi, vel imperdiet lacus posuere et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam tempor massa blandit ex iaculis viverra. Sed rutrum nec lorem nec hendrerit.</p>
     </div>
     <div class="story-img">
     <img src="img/story/story-4.jpg" alt="" />
     </div>
     </div>-->
     <!--STORY ITEM END-->
     
     </div>
     </div>
     </div>
     </div>
   </section>
   <!--story-section end-->
   
   
   
   
   <!--event-section start-->
   <section class="event-section" id="event" data-scroll-index="3">
     <div class="container">
     <div class="row">
     <div class="section-title">
     <h2>Celebrations</h2>
     </div>
     </div>
     
     <div class="row justify-content-center">
     <!-- EVENT ITEM START-->
     <div class="event-item">
     <div class="event-item-inner">
     <h3>Ceremony</h3>
     <span class="date">5 May 2023</span>
     <span class="time">7:00 - 9:00 PM</span>
     <p>Istiqlal Mosque</p>
     <p>Jl. Taman Wijaya Kusuma, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710.</p>
     <div class="social-icons">

     <a href="#" title="calendar">
     <i class='bx bxs-calendar-plus' ></i>
     </a>
                  
     <a href="#" title="location">
     <i class='bx bxs-map'></i>
     </a>
     </div>
     </div>
     </div>
     <!-- EVENT ITEM END-->
     
     <div class="event-item">
     <div class="event-item-inner">
     <h3>Receptions</h3>
     <span class="date">7 May 2023</span>
     <span class="time">7:00 - 9:00 AM</span>
     <p>The Ritz-Carlton Hotel</p>
     <p>Jl. DR. Ide Anak Agung Gde Agung Kav.E, Jakarta, Jl. Mega Kuningan Barat No.1, Daerah Khusus Ibukota Jakarta 12950.</p>
     <div class="social-icons">
     <a href="#" title="calendar">
     <i class='bx bxs-calendar-plus'></i>
     </a>
                  
     <a href="#" title="location">
     <i class='bx bxs-map'></i>
     </a>
                  
     </div>
     </div>
     </div>
     <!-- EVENT ITEM END-->
            
     </div>
     </div>
   </section>
   <!--event-section end-->
   
   <!--map-container-->
   
   <!--gallery-section start-->
   <section class="gallery-section" id="gallery" data-scroll-index="4">
     <div class="container">
     <div class="row">
     <div class="section-title">
     <h2>Gallery</h2>
     </div>
     </div>
     <div class="gallery-item">
     <!--Gallery Item-->
     
     <a href="img/gallery/square/1.jpg" class="square" data-aos="zoom-in-up" data-aos-duration="6000">
     <img class="item" src="img/gallery/square/1.jpg">
     </a>
         
     <a href="img/gallery/square/2.jpg" class="square" >
     <img class="item" src="img/gallery/square/2.jpg" data-aos="zoom-in-up" data-aos-duration="8000">
     </a>
         
     <a href="img/gallery/portrait/2.jpg" class="portrait">
     <img src="img/gallery/portrait/2.jpg" data-aos="zoom-in-up" data-aos-duration="10000">
     </a>
         
     <a href="img/gallery/landscape/3.jpg" class="landscape">
     <img src="img/gallery/landscape/3.jpg"data-aos="zoom-in-up" data-aos-duration="12000">
     </a>
         
     <a href="img/gallery/portrait/1.jpg" class="portrait">
     <img src="img/gallery/portrait/1.jpg"data-aos="zoom-in-up" data-aos-duration="14000">
     </a>
         
     <a href="img/gallery/landscape/5.jpg" class="landscape">
     <img src="img/gallery/landscape/5.jpg"data-aos="zoom-in-up" data-aos-duration="16000">
     </a>

     <a href="img/gallery/landscape/4.jpg" class="landscape">
     <img src="img/gallery/landscape/4.jpg"data-aos="zoom-in-up" data-aos-duration="18000">
     </a>
        
     </div>
     </div>
   </section>
   <!--gallery-section end-->
   
   <!--Amplop-section start-->
   <section class="gift-section" id="gift">

     <div class="container">
     <div class="row">
     <div class="section-title">
     <h2>Gift</h2>
     </div>
     </div>
     <div class="row justify-content-center">
     <!-- GIFT ITEM START-->
            
     <div class="gift-item">
     <div class="gift-item-inner">
     <h3>OVO</h3>
     <img class="gift-card justify-content-center" src="img/payment/logo-ovo.png">
     <div class="copyText">
          
     <p id="txt1">+1 234-567-890</p>
     
     <button onclick="copy('txt1')">
     <i class='bx bx-copy'>Copy</i>
     </button>
     
     <p>Raff</p>
     
     </div>
     </div>
     </div>
     <!-- GIFT ITEM END-->
     <!-- GIFT ITEM START-->
     <div class="gift-item">
     <div class="gift-item-inner">
     <h3>BCA</h3>
     <img class="gift-card" src="img/payment/logo-bca.png">
     <div class="copyText">
     <p id="txt1">+1 234-567-890</p>
     <button onclick="copy('txt1')">
     <i class='bx bx-copy'>Copy</i>
     </button>
     <p>Raff</p>
                    
     <p id="alert">Berhasil disalin!</p>
     </div>
     </div>
     </div>
            
     </div>
     </div>
   </section>
   
   <section class="rsvp-section" id="rsvp" data-scroll-index="4">
     <div class="container">
     <div class="row">
     <div class="section-title">
     <h2>Leave You're Message</h2>
     </div>
     </div>
     
     <form method="POST" id="commentForm">
	<div class="form-group">
	<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
	</div>
     <div class="form-group">
	<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
	</div>
	<span id="message"></span>
	<br>
	<div class="form-group">
	<input type="hidden" name="commentId" id="commentId" value="0" />
	<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
	</div>
	</form>		
	<br>
	<div id="showComments"></div>
     </div>
   </section>
   <!--rsvp-section start-->
   <!--footer-section start-->

   <footer class="footer">

     <div class="container">
     <div class="row">
     <div class="footer-content">
     <div class="couple-name">
     <img src="img/flower-circle.png" alt="" />
     <h2>
     John 
     <span>&</span>
     Jane
     </h2>
     </div>
     <p>Thank You</p>
     </div>
     </div>
     </div>
   </footer>
   <!--footer-section end-->
   
   <!--copyright-section start-->
   <footer>
   <p class="copyright-text">Designed with full of <i class='bx bxs-heart'></i>
   <br/> 
   Copyright &copy; 2022 Muhamad Rafli Akbar</p>  
   </footer>
   <!--copyright-section end-->
   

  
  <!--guest-section start-->
   <section class="guest-section">
     <div class="popup">
   <div class="popup-content">
     <div class="guest-page">
     <div class="guest">
     <div class="container">
     <div class="row justify-content-center">
     <div class="guest-content">
                       
     <img class="couple-gp" src="img/bg/couple.png">
     <h1>John & Jane</h1>
     <p class="greet">Kepada Bapak/Ibu/Saudara/i</p>
     <span style="color : #7D6E83; font-size : 21px;"> 
     <?php 
     $color = "#7D6E83";
     echo $_GET["to"];
     ?>
     </span>
     <p class="guest-name">Mohon Maaf bila ada kesalahan penulisan pada nama ataupun gelar.</p>
                          
     <button onclick="playAudio()" class="btn-1">
                              
     <audio id="audio" loop="loop">
     <source src="audio/audio.ogg" type="audio/ogg">
     <source src="audio/audio.mp3" type="audio/mpeg">
     Your browser does not support the audio element.
     </audio>
                              
     Buka Undangan
     <i class='bx bxs-book-open' ></i>
     </button>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
   </section>
  <!--guest-section end-->
  
  
  <!--comments-->
  <script src="js/comments.js"></script>
  
  <!--main js-->
  <script src="js/script.js"></script>
  
  <!--jquery js-->
  <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  
  <!--scroll js-->
  <script src="js/scrollIt.min.js" type="text/javascript" charset="utf-8"></script>
   
   <!--Animasi-->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
    AOS.init();
   </script>
   
   <!--light gallery js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">
   </script>
   <script src="js/audio.js"></script>
</body>
</html>