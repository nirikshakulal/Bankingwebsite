<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <style>
 




<!-- Theme Made By www.w3schools.com - No Copyright -->
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 {
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 {
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 {
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }





 
</style>
</head>
<body>
<header>
  <!-- NAVBAR -->
    <div class="container-fluid bg-3 p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php" style="font-weight: bold;color:black;">
          <i class="fas fa-university fa-2x mx-3"></i>SFB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto text-right">
            <li class="nav-item">
              <a class="nav-link active-home" href="index.php" style="font-weight:bold;color:black;">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#foot" style="font-weight:bold;color:black;">ABOUT US</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
</header>



    <!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h2 class="margin">SPARKS FONDATION <br>BANK</h2>
<p>GROW WITH US,<br>YOUR PERFECT BANKING PARTNER</p>

  <img src="bank.png" class="img-responsive img-circle margin" style="display:inline" alt="Bank" width="370" height="310"><br>
  <a href="#service"><button class="btn btn-light px-5 py-2 primary-btn">GET STARTED</button></a>

</div>




<!-- SERVICES -->


  <div class="container-fluid bg-3" id="service">
    <h2 class="title">OUR SERVICES ARE</h2>
   
      <div class="row offset-md-3" >
        <div class="col-md-4 ">
          <a href="history.php" style="text-decoration:none; color:black;">
            <div class="container-fluid bg-1">
              <i class="fa fa-history fa-5x" style="margin-bottom:50px"></i>
              <h6>TRANSACTION HISTORY</h6>
              <p>The records of every transaction</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="usertable.php" style="text-decoration:none; color:black;">
            <div class="container-fluid bg-1">
              <i class="fa fa-users fa-5x" aria-hidden="true"></i>
              <h6>VIEW CUSTOMERS/TRANSACT</h6>
              <p> View coustomer list and transfer</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div>



   
      </div>
  </div>


<!-- ABOUT US -->
<footer id="foot">
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-5 col-sm-5">
        <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This website is made by
          <span>KULAL NIRIKSHA KUSHA - THE SPARKS FOUNDATION</span>
        </p>
      </div>
      <div class="col-md-2 col-sm-12">
        <h4 class="text-light">Contact Us</h4>
        <p class="text-muted">Let us be socially connected</p>
        <div class="column text-light">
          <a href="github.com/nirikshakulal"><i class="fab fa-github"></i>
          <a href="#"><i class="fab fa-instagram" style="margin-left:15px;"></i></a>
          <a href="https://www.linkedin.com/in/niriksha-kulal-5415081b3/" style="margin-left:15px;"><i class="fab fa-linkedin"></i></a>
         
        </div>
      </div>
    </div>
  </div>
 </footer>
</body>
</html>