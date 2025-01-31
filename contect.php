
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESTURENT.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/sty.css">
    <link href="css/index.css" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">
    
</head>
<body>
    <!--nav bar stert-->

<body class="sub_page">

<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
            ORBIT
          </span>
        </a>
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <img src="images/menu.png" alt="">
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="index1.php">Home</a>
              <a href="about.php">About</a>
              <a href="menu.php">Menu</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
</div>
<!--nav bar end-->

    <!--contect stert-->
    <form action="contact_action.php" method="post" onsubmit="return formValidate();">

    <section class="contact-sec sec-pad">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-detail">
              <h1 class="section-title">Contact us</h1>
    
              <ul class="contact-ul">
                <li><i class="fa fa-location-dot"></i> 721423, Ramnagar, Westbengal</li>
    
                <li>
                  <i class="fa fa-phone"></i>
                  <a href="tel:08510004495"><b>8391962001</b></a>,
                  <a href="tel:08510005495"><b>0123400XXXX</b></a>
                </li>
    
                <li>
                  <i class="fa-solid fa-envelope"></i>
                  <a href="#"><b> rajibsamanata111@gmail.com</b></a>
                </li>
              </ul>
    
              <span>
                <a href="#" class="fb"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
              </span>
            </div>
          </div>
    
          <div class="col-md-6">
            <form action="#" class="contFrm" method="POST">
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="name" placeholder="Your Name" class="inptFld" required />
                </div>
    
                <div class="col-sm-6">
                  <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
                </div>
    
                <div class="col-sm-6">
                  <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" required />
                </div>
    
                <div class="col-sm-6">
                  <input type="text" name="sub" placeholder="Subject" class="inptFld" required />
                </div>
    
                <div class="col-12">
                      <textarea name="message" class="inptFld" rows="6" placeholder="Your Message..." required></textarea>
                </div>

                <div class="col-12">
                  <input type="submit" name="submit" value="SUBMIT" class="inptBtn" />
                </div>
              </div>
            </form>
          </div>
        </div>
    
        <div style="text-align: center; margin-top: 20px;"></div>
          
        </div>
    
      </div>
    </section>
      <!--end contect-->

      <!-- footer section -->
 <footer class="footer_section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-col">
        <div class="footer_contact">
          <h4>
            Contact Us
          </h4>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +91 8391962001
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
              rajibsamanta01@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 footer-col">
        <div class="footer_detail">
          <a href="" class="footer-logo">
            Feedback
          </a>
          <p>
            Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
          </p>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-pinterest" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 footer-col">
        <h4>
          Opening Hours
        </h4>
        <p>
          Everyday
        </p>
        <p>
          10.00 Am -10.00 Pm
        </p>
      </div>
    </div>
    <div class="footer-info">
    </div>
  </div>
</footer>
</from>
<!-- footer section -->

<!--java script stert-->
 <!-- jQery -->
 <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- slick  slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
<!--java script end-->
</body>
</html>