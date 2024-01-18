<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking page</title>
  
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
    <link rel="stylesheet" href="home page.css">
   
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


  
</body>
</html>