





<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Wonders</title>
    <link rel="stylesheet" href="home page.css">
    <link rel="stylesheet" href="Contact.css">
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-8FY4aVpSTLZDGH0kUv9+3qWkJfhxZu/5cCjZOQLGP1+UOpGxG5A10VAVXaXt8o6" crossorigin="anonymous"></script>



    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    
      
  
  
  
  
      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
      <!-- Google Fonts -->
    
</head>
<body>
    





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="loader page.php" id="logo"><span> <img src="2-removebg-preview.png" alt="Logo" width="60" height="40"></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="home page.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Book.php">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Packages.php">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Gallery.php">Gallery</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
              </li>
             
            </ul>
            <form class="d-flex" action="login_form.php">
              <button class="btn btn-primary" type="submit">Login</button>
          </form>
          
          <form class="d-flex" action="register_form.php">
              <button class="btn btn-primary" type="submit">Register</button>
          </form>
          
          </div>
        </div>
      </nav>
    <!-- Navbar End -->



    <!-- section  home starts -->
    <section class="video-section">
      <div class="video-overlay"></div>
      <video autoplay loop muted>
        <source src="pexels-tom-fisk-2169880-3840x2160-30fps.mp4" type="video/mp4">
      </video>
      <div class="video-content">
        <div>
          <img src="1-removebg-preview.png" alt=""width="450px"height="300px">
        </div>
        
        
      </div>
    </section>
    


    <!-- section home End -->
     
    <!-- Section Book Start -->
    <section class="book" id="book">
    <div class="container">

      <div class="main-text">
        <h1><span>Book</span>now</h1>
      </div>
      
      <div class="row">

        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="jeshoots-com-mSESwdMZr-A-unsplash.jpg" alt="">
          </div>
        </div>

        <div class="col-md-6 py-3 py-md-0">
          <form action="Book_form.php"method="post">

            <input type="text" class="form-control" placeholder="your phone number" name="phone"required><br>
            <input type="text" class="form-control" placeholder="where to"name="location" required><br>
            <input type="text" class="form-control" placeholder="number of guests"name="guests" required><br>
            <input type="date" class="form-control" placeholder="Arrival" name="arrival" required><br>
            <input type="date" class="form-control" placeholder="Leaving" name="leaving" required><br>
            <input type="text" class="form-control" placeholder="purpose of your visite" name="purpose" required><br>
            <input type="submit" value="Book Now" class="submit" required name="send">

          </form>
        </div>

      </div>
    </div>
  </section>
  
  <!-- Section Book End -->
        <!-- Section Packages Start -->
<section class="packages" id="packages" >
      <div class="container" style="color:rgb(37, 36, 36);">
        
        <div class="main-txt">
          <h1 style=" color:#19BfB7;"><span>Packages</span></h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./images/uk.png" alt="">
              <div class="card-body">
                <h3>United Kingdom</h3>
                <p>What is better than UK!</p>
                
                <h6>Price: <strong>$500</strong></h6>
                <a href="Book.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./images/france.png" alt="">
              <div class="card-body">
                <h3>Paris</h3>
                <p>Luxirious paris!</p>
                
                <h6>Price: <strong>$500</strong></h6>
                <a href="Book.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./images/pakistan.png" alt="">
              <div class="card-body">
                <h3>Canada</h3>
                <p>Experience canada!</p>
                
                <h6>Price: <strong>$600</strong></h6>
                <a href="Book.php">Book Now</a>
              </div>
            </div>

          </div>



        </div>



        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./images/italy.png" alt="">
              <div class="card-body">
                <h3>Italy</h3>
                <p> What is better than being in Italy!</p>
               
                <h6>Price: <strong>$800</strong></h6>
                <a href="Book.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./images/india.png" alt="">
              <div class="card-body">
                <h3>India</h3>
                <p>Explore the culture of india!</p>
                
                <h6>Price: <strong>$1000</strong></h6>
                <a href="Book.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./images/us.png" alt="">
              <div class="card-body">
                <h3>New York</h3>
                <p>New york for buisness New york for fun!</p>
                
                <h6>Price: <strong>$800</strong></h6>
                <a href="Book.php">Book Now</a>
              </div>
            </div>

          </div>



        </div>


      </div>
</section>
    <!-- Section Packages End -->

     <!-- Section Gallary Start -->
     <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1 style=" color:#19BfB7;"><span>Gallary</span></h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g2.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section Gallary End -->
    <div class="containerz">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2 class="contact-heading">Contact Us</h2>
				<form action="submit.php" method="post">
        <input type="text" name="name" class="field" placeholder="Your Name" required>
        <input type="email" name="email" class="field" placeholder="Your Email" required>
        <input type="tel" name="phone" class="field" placeholder="Phone">
        <textarea name="message" placeholder="Message" class="field" required></textarea>
        <button type="submit" class="btn">Send</button>
      </form>
			</div>
		</div>
	</div>
    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>Thanks for the visit </span></h1>
      <h1><span>here you find our associated links </span></h1>
      <p>hope you enjoy our Hidden Wonders</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      
     
    </footer>
    <!-- Footer End -->






    
    



  


    
    




  








    





   







   







    
    






    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>