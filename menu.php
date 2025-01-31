<?php
    include('user_function.php');
?>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.2/css/all.min.css">
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
          <a class="navbar-brand" href="index1.php">
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
                <a href="contect.php">Contect</a>
                <a href="booking.php">Booking</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!--nav bar end-->

  <img src="img/menu hed.jpg"  alt="" style="height: 250px;width: 1520px;">


  <!--menu stert-->

  <div class="container-fluid menu py-2">
    <div class="container py-5">
        <h1 class="mb-4">--Welcome--</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                    <form action="/search" method="GET" class="w-100 mx-auto d-flex">
    <div class="input-group">
        <!-- Search input field -->
        <input type="search" name="query" class="form-control p-3" placeholder="Enter keywords" aria-label="Search" required>
        <!-- Search button (icon) -->
        <button id="search-icon-1" class="btn btn-outline-secondary p-2" type="submit" aria-label="Search">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="menu">Default Sorting:</label>
                            <select id="menu" name="menu" class="border-0 form-select-sm bg-light me-3" form="menu">
                                <option value="volvo">Nothing</option>
                                <option value="saab"><a href="#">Popularity</a></option>
                                <option value="opel">Organic</option>
                                <option value="audi">Fantastic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <!-- <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Categories</h4>
                                    <ul class="list-unstyled menu-categorie">
                                        <li>
                                            <div class="d-flex justify-content-between menu-name">
                                                <a href="#"><i class="fa-solid fa-pizza-slice" style="color: #63E6BE;"></i>Pizza</a>
                                                <span>(3)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menu-name">
                                                <a href="#"><i class="fa-solid fa-momo-slice"></i>Momos</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menu-name">
                                                <a href="#"><i class="fa-solid fa-cake-slice"></i>cakes</a>
                                                <span>(2)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menu-name">
                                                <a href="#"><i class="fa-solid fa-font-awesome"></i></i>Biryani</a>
                                                <span>(8)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menu-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Drink</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4 class="mb-2">Price</h4>
                                    <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                                    <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Additional</h4>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages">
                                        <label for="Categories-1"> Organic</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages">
                                        <label for="Categories-2"> Fresh</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages">
                                        <label for="Categories-3"> Sales</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages">
                                        <label for="Categories-4"> Discount</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="Beverages">
                                        <label for="Categories-5"> Expired</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <h4 class="mb-3">Discount products</h4>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/offer (1).jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Burger</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 ₹</h5>
                                            <h5 class="text-danger text-decoration-line-through"><sub><s>4.11 ₹</s></sub></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/offer (2).jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Chicken</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 ₹</h5>
                                            <h5 class="text-danger text-decoration-line-through"><sub><s>90.00 ₹</s></sub></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/offer (3).jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Rice</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 ₹</h5>
                                            <h5 class="text-danger text-decoration-line-through"><sub><s>99.00₹</s></sub></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-4">
                                    <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative">
                                    <img src="img/menu(11).jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                        <h2 class="text-secondary fw-bold">Fresh <br> Fruits <br></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            <?php
                                        $alldata=getAllProducts();
                                        if(!empty($alldata)){
                                            foreach($alldata as $data){
                            ?>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                            
                                <div class="rounded position-relative menu-item">
                                    

                                    <div class="menu-img">
                                        <img src="upload/<?php echo $data['image']; ?>" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?php echo $data['discount']; ?></div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4><?php echo $data['name']; ?></h4>
                                        <p><?php echo $data['description']; ?></p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0"><?php echo $data['price']; ?></p>
                                            <a href="booking.php" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                        }
                                    }else{
                                        echo "<div class='item position-relative'>Record Not found........</div>";
                                    }
                            ?>
                            <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu (2).jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">5%</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Burger</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">40%</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu(3).jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">90%</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Pizza</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">100$</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu (4).jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">12%</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Biryani</h4>
                                        <p>Biryani is a mixed rice dish,It is made with rice,some type of meat( chicken, goat,beef,) and spices. </p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">70$</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu(5).jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">40%</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Momos</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">20$</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           
                           

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->


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
            <a href="feedback.php" class="footer-logo">
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