<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Serving PA counties with excellence.">
  <meta name="keywords" content="mellor dumpster rental and property services">
  <meta name="author" content="codingimages.com">
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Sawarabi+Gothic" rel="stylesheet">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- Bootstrap for the contact form -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href=img/logo.png>
  <title>Mellor Dumpster Rentals and Property Services</title>
</head>

<body>

  <nav class="navbar">
    <div class="navbar__logo clearfix">
      <img src="img/logo.png" width="40px" height="auto" alt="">
    </div>
    <ul class="navbar__links">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a href="services.html">Services</a>
      </li>
    </ul>
  </nav>

  <header class="header__1">
    <div class="header__1-background">
      <div class="header__1-text">
        <h1>Contact us</h1>
        <p>Contact us for more information!</p>
        <p class = "phone__number-2"> Call us! <br> <a href="tel:5705736675">570-573-6675</a></p>
      </div>
    </div>
  </header>



  <!-- content start -->
  <section class="container">
    <h1 class=" mt-5">
      We have the answers
    </h1>
  </section>

  <div class="container-form">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form text-black mt-5 px-4 py-5">
          <h3 class="text-center mb-3">Contact Form</h3>
          <div class="text-center">
            <?php
                      
                      if(isset($_SESSION['msg'])){
                          echo $_SESSION['msg'];
                          unset($_SESSION['msg']);
                      } else if(isset($_SESSION['msgFields'])){
                          echo $_SESSION['msgFields'];
                          unset($_SESSION['msgFields']);
                      }
                      
                      ?>
          </div>
          <form action="SendGrid-API/f_process.php" method="post">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="Name">Name
                  <span>*</span>
                </label>
                <input type="text" name="name" class="form-control bg-dark text-white">
              </div>
              <div class="form-group col-md-6">
                <label for="Phone">Phone
                  <span>*</span>
                </label>
                <input type="text" name="phone" class="form-control bg-dark text-white">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="Email">E-Mail
                  <span>*</span>
                </label>
                <input type="text" name="email" class="form-control bg-dark text-white">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="Name">Message
                  <span>*</span>
                </label>
                <textarea name="message" id="" cols="30" rows="5" class="form-control bg-dark text-white"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-dark">Send message</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="container">
    <div class="row">
      <div class="col col-sm-12 col-lg-6 mb-5 mt-5">
        <h1 class="text-primary">
          <strong>¿Buscas empleados?</strong>
        </h1>
            <a class = "lead" href="tel:4435382638">443-538-2638</a>
            <br>
            <a class="lead"href="mailto:carlos@santistaffingsolutions.com">carlos@santistaffingsolutions.com</a>
            <br>
            <a class="lead" href=https://www.google.com/maps/place/7411+Riggs+Rd+%23212,+Hyattsville,+MD+20783/@38.9826766,-76.9808303,17z/data=!4m5!3m4!1s0x89b7c66832c6794f:0xd22b34dcefa12d15!8m2!3d38.982676!4d-76.978641>7411 Riggs Rd. Suite #212
              <br> Hyattsville, MD, 20783</a>
            <br>
            <br>
          </div>
      <div class="col col-sm-12 col-lg-6 mb-5 mt-5">
        <h1 class="text-primary">
          <strong>¿Buscas trabajo?</strong>
        </h1>
        <a class="lead" href="tel:4435382638">(443)960-2386
          <br>
        </a>
        <a class="lead" href="tel:4434106228">(443)410-6228</a>
        <br>
        <a class="lead" href="mailto:joaquinleiva03@santistaffingsolutions.com">joaquinleiva03@santistaffingsolutions.com</a>
        <br>
        <a class="lead" href=https://www.google.com/maps/place/7411+Riggs+Rd+%23212,+Hyattsville,+MD+20783/@38.9826766,-76.9808303,17z/data=!4m5!3m4!1s0x89b7c66832c6794f:0xd22b34dcefa12d15!8m2!3d38.982676!4d-76.978641>7411 Riggs Rd. Suite #212
          <br> Hyattsville, MD, 20783</a>
        <br>
        <br>
      </div>
    </div>
  </div> -->


  <!-- <section class="container">
    <div class="row">
      <div class="col col-sm-12 col-lg-6 mb-3 mt-3">
        <h1 class="text-primary">
          <strong>Horarios Dirección</strong>
        </h1>
        <p class="lead">Lunes a Sábado</p>
        <p>10:00 A.M. - 6:00 P.M.</p>
        <a class="lead" href=https://www.google.com/maps/place/7411+Riggs+Rd+%23212,+Hyattsville,+MD+20783/@38.9826766,-76.9808303,17z/data=!4m5!3m4!1s0x89b7c66832c6794f:0xd22b34dcefa12d15!8m2!3d38.982676!4d-76.978641>7411 Riggs Rd. Suite #212
          <br> Hyattsville, MD, 20783</a>
      </div>
      <div class="col col-sm-12 col-lg-6 mb-3 mt-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.431299469393!2d-76.98080628409996!3d38.98265187955748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c66832c6794f%3A0xd22b34dcefa12d15!2s7411+Riggs+Rd+%23212%2C+Hyattsville%2C+MD+20783!5e0!3m2!1sen!2sus!4v1521207891489"
          width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </section> -->
  <!-- Content ends -->

  <!-- footer start -->
  <div class="footer">
      <p>2018 All Rights Reserved</p>
      <p>Website created by <a href="https://codingimages.com">Coding Images</a>. </p>
    </div>
  <!-- footer ends -->

</body>

<!-- bootstrap jquery plugins -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>
<!-- bootstrap jquery plugins ends-->

</html>