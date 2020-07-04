<?php
    require_once('DBconnect.php');
    $db = new DBconnect();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website | Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <header>
    <nav>
      <div class="menubar logo">
        <a href="index.html">
          <img src="images/logo.PNG" alt="">
        </a>
        <div class="icons">
          <i class="icon-menu"><span></span></i>
        </div>
      </div>
      <ul class="menu">
        <li class="menu-link sub">
          <a href="#0" class="text-item">Sign Up<span class="icon"></span></a>
          <ul class="submenu">
            <li class="sub-item"><a href="sellerSignUp.html">Become a Seller</a></li>
            <li class="sub-item"><a href="signup.html">Become a Premium user</a></li>
          </ul>
        </li>
        <li class="menu-link"><a href="#0" class="text-item">Discounts</a></li>
        <li class="menu-link"><a href="#service" class="text-item">Services</a>          
        </li>
        <li class="menu-link"><a href="#contact" class="text-item">Contact Us</a></li>
      </ul>
    </nav>
  </header>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-caption d-none d-md-block">
          <button href="#" class="exclusive-btn">Visit</button>
        </div>
        <img class="d-block w-100" src="images/fnc_banner_16.jpg" alt="Second slide">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption d-none d-md-block">
          <button href="#" class="exclusive-btn">Visit</button>
        </div>
        <img class="d-block w-100" src="images/fnc_banner_16.jpg" alt="Third slide">
        <div class="overlay"></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container-fluid mt-5 text-center">
    <h2 class="main-heading ">Get <span class="type" style="color: #687864;"></span></h2>
    <hr class="mb-5 w-75">
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-3 listing-container">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-12 col-xl-4">
              <figure class="snip1206 m-auto">
                <img src="images/f3.jpg" alt="sample74" />
                <figcaption>
                  <h3>Oftrs</h3>
                  <p>Just makes people try to do everything at once.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
              <div class="card-body">
                <h1 class="card-title">Outfitters</h1>
                <p class="card-text">Outfitters SALE is about to begin! Shop and save upto 50% OFF, in stores tomorrow &
                  online from the 19th of June. </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3 listing-container">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-12 col-xl-4">
              <figure class="snip1206 m-auto">
                <img src="images/f7.jpg" alt="sample74" />
                <figcaption>
                  <h3>Forecast</h3>
                  <p>Just makes people try to do everything at once.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
              <div class="card-body">
                <h1 class="card-title">Forecast</h1>
                <p class="card-text">Stay true to your own style!
                  Forecast SUMMER SALE offering UPTO 50% Off on entire stock!
                  Visit your nearest Forecast store or shop online</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3 listing-container">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-12 col-xl-4">
              <figure class="snip1206 m-auto">
                <img src="images/f1.png" alt="sample74" />
                <figcaption>
                  <h3>Engine</h3>
                  <p>Just makes people try to do everything at once.</p>
                </figcaption>
                <a href="https://www.facebook.com/EnginePakistan"></a>
              </figure>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
              <div class="card-body">
                <h1 class="card-title">Engine</h1>
                <p class="card-text">Avail 30% OFF on Summer 2020 collections for Kids! Rush to your nearest store or
                  Shop Online</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3 listing-container">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-12 col-xl-4">
              <figure class="snip1206 m-auto">
                <img src="images/f2.jpg" alt="sample74" />
                <figcaption>
                  <h3>Char Coal</h3>
                  <p>Just makes people try to do everything at once.</p>
                </figcaption>
                <a href="https://www.facebook.com/EnginePakistan"></a>
              </figure>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
              <div class="card-body">
                <h1 class="card-title">Charcoal</h1>
                <p class="card-text">It's that Time of the Year! Celebrate Father's Day by Giving your
                  Best Buddy an amazing Gift! Offering FLAT 30% OFF on Entire Stock from 15th June till
                  21st June in all Charcoal Outlets & Website! </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="card listing-container m-auto" style="width:18rem">
              <figure class="snip1206 m-auto">
                <img src="images/f5.png" alt="sample74" />
                <figcaption>
                  <h3>Swag</h3>
                  <p>Just makes people try to do everything at once.</p>
                </figcaption>
                <a href=""></a>
              </figure>
              <div class="card-body vertical-card-body m-auto">
                <h3>Swag Clothing</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-6">
            <div class="card listing-container ml-auto mr-auto mt-2" style="width:18rem">
              <figure class="snip1206 m-auto">
                <img src="images/f6.png" alt="sample74" />
                <figcaption>
                  <h3>Diana's</h3>
                  <p>Just makes people try to do everything at once.</p>
                </figcaption>
                <a href=""></a>
              </figure>
              <div class="card-body vertical-card-body m-auto">
                <h3>Diana's botique</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>


  </div>

  <div class="getregister-banner mt-5 mb-5 text-white text-center">
    <div class="banner-content m-3">
      <h1>get registered</h1>
      <p>get your self registered and avail speacial Discounts or if your a seller put your advertisments and promote
        yourself !</p>
      <a class="btn btn-outline-white" href="signup-selection.html">Get Registered</a>
    </div>
  </div>

  <div class="container mb-5" id="service">
    <h1 class="text-center main-heading mb-5">Our Services</h1>
    <div class="row">
      <div class="col-lg-6 mb-3">
        <div class="card bg-dark text-white">
          <div class="card-overlay"></div>
          <img class="card-img" src="images/pro1.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h3 class="card-title">Promotions</h3>
            <p class="card-text">Get our Services to grow your product sales.</p>
            <a href="#" class="btn btn-outline-white">Get Service</a>
          </div>
        </div>       
      </div>
      <div class="col-lg-6">
        <div class="card bg-dark text-white">
          <div class="card-overlay"></div>
          <img class="card-img" src="images/por2.jpg" alt="Card image">
          <div class="card-img-overlay ">
            <h3 class="card-title">Advertisment</h3>
            <p class="card-text">Get our Services to grow your product sales.</p>
            <a href="#" class="btn btn-outline-white">Get Service</a>
          </div>
      </div>
    </div>
  </div>

  <div class="container mt-5" id="contact">
    <form action="">
      <h1 class="text-center main-heading">Contact Us</h1>
      <hr class="mb-5">
      <div class="row">
        <div class="col-lg-4 text-contact">
          <p for=""><i class="fas fa-map-marker-alt"></i> NTU Lahore - Sheikhupura - Faisalabad Rd, Manawala, Faisalabad,
            Punjab 37610</p>
          <p for=""><i class="fas fa-mobile-alt"></i> 0300-0071234</p>
          <p for=""><i class="fas fa-at"></i> help@markdown.com</p>
        </div>
        <div class="col-lg-8">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname4">Name</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>            
          </div>
          <div class="mt-3">
            <label for="exampleFormControlTextarea1">Comments</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button class="btn btn-outline-info mt-3">Send</button>
        </div>
      </div>
    </form>
  </div>
  </div>

  <footer>
    <p class="">Copyright © 2020 MH Sub I, LLC dba Nolo ® Self-help services may not be permitted in all
      states.The information
      provided on this site is not legal advice, does not constitute a lawyer referral</p>
  </footer>



  <script src="https://kit.fontawesome.com/325897fa15.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/typed.js"></script>

  <script>
    var typed = new Typed('.type', {
      strings: [' Exclusive Discounts', ' Best Deals'],
      smartBackspace: true,
      typeSpeed: 40,
      backSpeed: 40,
      loop: 40,
    });
  </script>

</body>

</html>