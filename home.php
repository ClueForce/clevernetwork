<!DOCTYPE html>
<html lang="en">
<head>
    <title>CleverNetwork &mdash; Minecraft Server with a bunch of minigames</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">CleverNetwork</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fad fa-tv-retro"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about"><i class="fad fa-line-columns"></i> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact"><i class="fad fa-backpack"></i> Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://discord.clevernetwork.xyz"><i class="fab fa-discord"></i> Discord</a>
          </li>
          <?php
          session_start();
          if(!isset($_SESSION['loggedin'])) {
              echo '<li class="nav-item">
            <a class="nav-link" href="login"><i class="fad fa-sign-in-alt"></i> Login</a>
          </li>';
          } else {
              echo '<li class="nav-item">
            <a class="nav-link" href="profile"><i class="fa fa-user"></i> Profile</a>
          </li>';
              echo '<li class="nav-item">
            <a class="nav-link" href="404"><i class="fa fa-home"></i> Forums</a>
          </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Banner -->
	<section class="content-banner">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <div class="banner-con text-center">
            <p class="first-title"><i class="fad fa-axe"></i> CleverNetwork</p>
          </div>
        </div>
      </div>
    </div>
    <svg class="mt-5" id="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#131313" fill-opacity="1" d="M0,64L0,32L180,32L180,128L360,128L360,160L540,160L540,96L720,96L720,192L900,192L900,224L1080,224L1080,32L1260,32L1260,160L1440,160L1440,320L1260,320L1260,320L1080,320L1080,320L900,320L900,320L720,320L720,320L540,320L540,320L360,320L360,320L180,320L180,320L0,320L0,320Z"></path></svg>
</section>
    <!-- about -->
	<section id="about"  style="background-color: #131313 !important;">
    <div class="text-light">
      <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
              <h2>What is <span style="color: #6932a8">CleverNetwork</span>?</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
              <p>Server Minecraft terbaik dengan banyak Games dan Minigames yang seru serta dengan fitur yang membuat anda tidak mudah bosan.</p>
            </div>
            <div class="col-md-4">
              <p>Kalian juga bisa mencari teman dan bermain bersama teman di server ini, member dan staff yang ramah pastinya kaliian nyaman di server kita :3 </p>
            </div>
          </div>
      </div>  
    </div><svg class="mt-5" id="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f1f1f1" fill-opacity="1" d="M0,64L0,32L180,32L180,128L360,128L360,160L540,160L540,96L720,96L720,192L900,192L900,224L1080,224L1080,32L1260,32L1260,160L1440,160L1440,320L1260,320L1260,320L1080,320L1080,320L900,320L900,320L720,320L720,320L540,320L540,320L360,320L360,320L180,320L180,320L0,320L0,320Z"></path></svg>
</section>
<!-- register -->

<section id="register">
    <div style="background-color: #f1f1f1;" class="text-dark">
        <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2 id="contact-title">Contact</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                  <strong><i class="fad fa-torii-gate"></i> Hey!</strong> we just received your registration
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form name="contact" autocomplete="off">
                  <div class="mb-3">
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Discord Tag" aria-label="Name" name="name" required >
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Subject" aria-label="Email" name="email" required >
                        </div>
                      </div>
                      
                      <div class="mt-3">
                        <input type="text" class="form-control" placeholder="Email" aria-label="discord" name="discord" required >
                      </div>
                    </div>
                  <div class="mb-4">
                    <textarea class="form-control" id="message" rows="3" placeholder="Message" name="message" required ></textarea>
                  </div>
                  <button type="submit" class="btn btn-outline-dark btn-kirim" ><i class="fad fa-paper-plane"></i> Submit</button>
    
                  <button class="btn btn-outline-danger btn-loading d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Sending...
                  </button>
                </form>
              </div>
              <div class="mb-5"></div>
              <div class="mb-5"></div>
            </div>
          </div>
    </div>
</section>
<footer>
  <p>&copy; Copyright CleverNetwork 2021 All Rights Reserved.<br>
  Website Designed with <span class="love">❤</span> by <a href="https://github.com/ClueForce/clevernetwork">CleverWebManager</a></p>
</footer>
</body>
</html>
