<?php
     $Name = $_POST['Name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     $class = $_POST['class'];
     //Database Connection

     $conn = new mysqli('localhost','root','','contact');
     if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
     }
     else{
         $stmt = $conn->prepare("insert into contact_us(Name, email, message,class)values(?, ?, ?, ?)");
         $stmt->bind_param("ssss",$Name,$email,$message,$class);
         $stmt-> execute();
         $stmt->close();
         $conn->close();
     }  
?>

<html>
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <link rel="shortcut icon" href="images/logo/logo.png">
          <link rel="stylesheet" href="css/style.css" />
          <script src="js/script.js"></script>
          <title>Thankyou</title>
        </head>
  <body>
    <div class="header">
      <span class="call"> Call : 1234567890 </span><span class="email"> Email : gurukul123@gmail.com</span> <a href="online_payment.php"><span class="Fee">Fees Submission</span></a> <a href="contactus.html"><span class="Inquiry">Inquiry</span></a> <a href="addmission_form.html"><span class="Register">Register</span></a>
    </div>
    <div class="navigationbar">
      <!-- LOGO -->
      <img src="images/logo/logo.png" class="logo">
      <div class="navbar">
          <nav>
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
              <!-- USING CHECKBOX HACK -->
              <input type="checkbox" id="checkbox_toggle" />
              <label for="checkbox_toggle" class="hamburger">&#9776;</label>
              <!-- NAVIGATION MENUS -->
              <div class="menu">
                <li><a href="index.html">Home</a></li>
                <li class="services">About Us
                  <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                      <li><a href="about_us.html">About University</a></li>
                      <li><a href="vision.html">Vision and Mission</a></li>
                    </ul>
                  </li>
                <li class="services">
                  <a href="academics.html">Academics</a>
                </li>
                <li class="services">Admission
                  <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                      <li><a href="admission_process.html">Admission Process</a></li>
                      <li><a href="addmission_form.html">Apply Online</a></li>
                      <li><a href="fees_structure.html">Fees Structure</a></li>
                      <li><a href="online_payment.php">Pay Fees Online</a></li>
                    </ul>
                  </li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
              </div>
            </ul>
           </nav>
      </div>
    </div>

<div class="thankyou_div_1">
<h1 class="thankyou_h1">Thankyou For Submission!</h1>
<img src="images/image/thankyou.png" class="thankyou_img">
</div>


     <div class="in_div_6">
        <div class="videoContainer hide-for-small-only">
          <div class="overlay"></div>
        <video autoplay loop muted>
              <source src="videos/video1.mp4" type="video/mp4">
        </video>
      </div>
    </div>
    <div class="footer_main">
    </div>
    <div class="footer_main_1">
        <div class="footer_row">
            <div class="footer_col">
              <div class = "vertical">
                <text>GURUKUL</text></div>
              <p class="footer_desc">The main purpose of Gurukul is learning for everyone.Education is the most powerful weapon in today's world.We want everyone to master it.Don't stress out,Do your best!</p>
            </div>
            <div class="footer_col" >
              <div class = "vertical_1">
                <text>FOLLOW US ON</text></div>
                <p class="footer_desc_1"><a href="https://www.facebook.com"><img src="images/image/social-facebook.png" class="social_icons"></a> &nbsp; <a href="https://www.twitter.com"><img src="images/image/social-twitter.png" class="social_icons"></a> &nbsp; <a href="https://www.youtube.com"><img src="images/image/social-youtube.png" class="social_icons"></a>  <br><br>  <a href="https://www.instagram.com"><img src="images/image/social-instagram.png" class="social_icons"></a>  &nbsp; <a href="https://www.gmail.com"><img src="images/image/social-email.png" class="social_icons"></a> &nbsp; <a href="https://www.pinterest.com"><img src="images/image/social-pinterest.png" class="social_icons"></a></p>
     
            </div>
            <div class="footer_col">
              <div class = "vertical_2">
                <text>LINKS LIST</text></div>
                 <a href="index.html"><p class="footer_desc">Home</p></a>
                 <a href="addmission_form.html"><p class="footer_desc_2">Admission</p></a>
                 <a href="gallery.html"><p class="footer_desc_2">Gallery</p></a>
                 <a href="contactus.html"><p class="footer_desc_2">Contact Us</p></a>
                 <a href="about_us.html"><p class="footer_desc_2">About Us</p></a>
            </div>
            <div class="footer_col" >
              <div class = "vertical_3">
                <text>ADDRESS</text></div>
                <p class="footer_desc_3">
                  123, Gulmohor Road,Behind Datta Mandir,Kondhwa,Pune-411005</p>
    
                  <div class = "vertical_4">
                    <text>CONTACT/EMAIL US </text></div>
                    <p class="footer_desc_4">+91 98765 43210</p>
                    <p class="footer_desc_5">gurukul@gmail.com</p>
                  
            </div>
              
          </div>
        </div> 
  
    </body>
  </html>
  
  
