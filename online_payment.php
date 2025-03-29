<html>
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <link rel="shortcut icon" href="images/logo/logo.png">
          <link rel="stylesheet" href="css/style.css" />
          <script src="js/script.js"></script>
          <title>Online Payment</title>
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

    <div id="admission_div_1">
      <p>Online Payment</p>
      <text class="fees_div_1_text">Please fill the below details correctly!</text>
     </div>


    <div class="payment_div_1">
     <p class="form_heading_1">Payment Details</p>
     <hr class="form_line_1">

    <div class="form_body">
      <div class="admissionf_form">
        <!--PhP-myAdmin-->
          <form action="payment.php" method="post">
            <div class="admissionf_row">
              <div class="admissionf_col_1">
                <label for="fname">Student's Name</label>
              </div>
              <div class="admissionf_col_2">
                <input type="text" id="fname"  placeholder="Your name.." name="PStudName">
              </div>
          </div>
          <br>
          <div class="admissionf_row">
              <div class="admissionf_col_1">
                <label for="address" id="address">Phone number</label>
              </div>
              <div class="admissionf_col_2">
                  <input type="text" id="phn"  placeholder="Enter phone number" name="PPhn">
  
                  <label for="no">Alternate-no</label> 
                <input type="text" id="phn"  placeholder="Enter alternate no " name="PAPhn">
  
                <label for="e-mail">E-mail</label> 
                <input type="email" id="phn"  placeholder="Enter your e-mail" name="PEmail">
  
              </div>
            </div>
            <br>
          
            <div class="admissionf_row">
              <div class="admissionf_col_1">
                <label for="address" id="address">ID Number</label>
              </div>
              <div class="admissionf_col_2">
                  <input type="text" id="idpro"  placeholder="Enter ID Number" name="PIdno">
              </div>
            </div>
            
            <div class="admissionf_row">
              <div class="admissionf_col_1">
              <label for="class">Class</label>
              </div>
              <div class="admissionf_col_2">
                <select id="class" name="PClass" >
                  <option selected="select standard">select standard</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                  <option value="5th">5th</option>
                  <option value="6th">6th</option>
                  <option value="7th">7th</option>
                  <option value="8th">8th</option>
                  <option value="9th">9th</option>
                  <option value="10th">10th</option>
                  <option value="11th Arts">11th Arts</option>
                  <option value="11th Science">11th Science</option>
                  <option value="11th Commerce">11th Commerce</option>
                  <option value="12th Arts">12th Arts</option>
                  <option value="12th Science">12th Science</option>
                  <option value="12th Commerce">12th Commerce</option>
                </select>
            </div>

           <!--<div class="admissionf_row">
              <div class="admissionf_col_1">
                <label for="address" id="address">Amount</label>
              </div>
              <div class="admissionf_col_2">
                  <input type="number" id="idpro"  placeholder="Enter Payable Amount" name="amount">
              </div>
            </div>-->

        <br>
         <!-- <div class="last_admissionf_row">
               <button class="payment_form_button">Submit</button>
            </div>-->
            <?php
  require('config.php');
  ?>
<form action="thankyou.html" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button payment_form_button"
		data-key="<?php echo $publishableKey?>"
		data-amount=1000000
		data-name="Gurukul"
		data-description="Fees Submission!"
		data-image="logo.png"
		data-currency="inr"
		data-email="gurukul123@gmail.com"
	>
	</script>
</form>
          </form>
        </div>
      </div>
    </div>  
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
  
  