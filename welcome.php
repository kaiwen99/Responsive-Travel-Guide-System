<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive web based Travel Guide System </title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="nav">
    <ul>
        <li><a href="php/logout.php">Logout</a></li>
        <li><a href="php/Tour.php">Tour</a></li>
        <li><a href="php\products.php">Souvenir</a></li>
        <li><a href="welcome.php">Home</a></li>
    </ul>
    <div>
    <img class="logo" src="pic/logo.png">
    </div>
  </div>
  <div class="slide" style="max-width:100% ;max-height:500px" >
    <div class="hide-display">
    <img src="pic/CNY.jpg" style="width:100%">
    <div class="centered text-bold text-large text-gold">Happy Chinese New Year!</div>
  </div>
  <div class="hide-display">
    <div><img  src="pic/travel.png" style="width:100%"></div>
    <div class="centered text-bold text-large text-white" style="margin-top:-20pt;">Welcome!</div>
  </div>
      <div class="slide-center slide-container slide-section slide-large slide-text-white slide-display-bottommiddle" style="width:100%">
        <div class="slide-left slide-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="slide-right slide-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
      <div class="slide-placement">
          <span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(1)"></span>
          <span class="slide-badge demo slide-border slide-transparent slide-hover-white" onclick="currentDiv(2)"></span>
      </div>
    </div>
  </div>
  <div class="featured">
    <div class="container">
      <div class="header-content">
        <span class="subheading">Featured</span>
        <h2>Featured State</h2>
      </div>
      <div class="row-featured">
        <div class="column-featured">
          <div class="destination">
            <a class="featured-picture" style="background-image: url('pic/States/kedah.jpg');" href="Tour.html"></a>
          <div class="destination-description">
              <h3><a href="Tour.html">Kedah</a></h3>
              <span class="price">Suggested budget: RM100 per day</span>
              <p>Recommend place: Langkawi, Kuah</p>
        </div>
    </div>
  </div>
  <div class="column-featured">
    <div class="destination">
      <a class="featured-picture" style="background-image: url('pic/States/johor.jpg');" href="Tour.html"></a>
    <div class="destination-description">
        <h3><a href="Tour.html">Johor</a></h3>
        <span class="price">Suggested budget: RM100 per day</span>
        <p>Recommend place: Legoland, Desaru.</p>
  </div>
</div>
</div>
<div class="column-featured">
  <div class="destination">
    <a class="featured-picture" style="background-image: url('pic/States/KL.jpg');" href="Tour.html"></a>
  <div class="destination-description">
      <h3><a href="Tour.html">Kuala Lumpur</a></h3>
      <span class="price">Suggested budget: RM150 per day</span>
      <p>Most recommend place: Petronas Twin Tower, Batu Caves</p>
</div>
</div>
</div>
<div class="column-featured">
  <div class="destination">
    <a class="featured-picture" style="background-image: url('pic/States/penang.jpg');" href="Tour.html"></a>
  <div class="destination-description">
      <h3><a href="Tour.html">Penang</a></h3>
      <span class="price">Suggested budget: RM150 per day</span>
      <p>Recommend place: George Town, Batu Ferringhi</p>
</div>
</div>
</div>
<div class="column-featured">
  <div class="destination">
    <a class="featured-picture" style="background-image: url('pic/States/sabah.webp');" href="Tour.html"></a>
  <div class="destination-description">
      <h3><a href="Tour.html">Sabah</a></h3>
      <span class="price">Suggested budget: RM90 per day</span>
      <p>Recommend place: Kota Kinabalu, Sandakan</p>
</div>
</div>
</div>
<div class="column-featured">
  <div class="destination">
    <a class="featured-picture" style="background-image: url('pic/States/melaka.jpg');" href="Tour.html"></a>
  <div class="destination-description">
      <h3><a href="Tour.html">Melaka</a></h3>
      <span class="price">Suggested budget: RM80 per day</span>
      <p>Recommend place: A Famosa, Christ Church</p>
</div>
</div>
</div>
  </div>
</div>
</div>
  <div class="subscribe" style="height: 250pt; margin-top: -10pt; margin-bottom: -30pt;">
    <div class="container" style="padding-top: 30pt;">
      <div class="row justify-content-center">
        <div class="column text-center">
          <h2>subscribe for newsfeed!</h2>
          <p>Once you subcribe to our channel, we will keep update our latest information and freebies to you!</p>
        </div>
        </div>
      <div class="row  margin--top">
        <div class="column  text-center">
          <form name="form1" class="subscribe-form" action="#">
            <div class="form-group d-flex justify-content-center">
              <input class="form-control" type="text" name="myemail" placeholder="Enter email address">
              <input class="submit" type="submit" value="Submit" name="submit" onclick="ValidateEmail(myemail)">
        </div>
      </form>
      </div>
  </div>

  </div>
  </div>

  <footer class="footer text-white">
    <div class="footer-container">
      <div class="row">
        <div class="column">
          <div class="column-widget">
          <h2>Travel Guide System</h2>
          <p style="margin-right:15pt">This is a homepage let user to know our Malaysia best tourism</p>
            <ul class="padding-top">
              <li class="list-margin list-margin-left"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li class="list-margin"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
              <li class="list-margin"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            </ul>
          </div>
        </div>
        <div class="column">
          <div class="column-widget">
            <h2 class="margin-left">Information</h2>
          <ul class="ul-footer">
          <li>About</li>
          <li>Service</li>
          <li>Terms & Conditions</li>
          <li>Become a partner</li>
          <li>Best Price Guarantee</li>
          <li>Privacy and Policy</li>
        </ul>
        </div>
      </div>
      <div class="column">
        <div class="column-widget">
          <h2 class="margin-left">Customer Support</h2>
          <ul class="ul-footer">
          <li>FAQ</li>
          <li>Payment Option</li>
          <li>Booking Tips<li>
          <li>How it works</li>
          <li>Contact Us</li>
        </ul>
        </div>
      </div>
      <div class="column">
        <div class="column-widget">
          <h2>Have a Questions?</h2>
          <table style="100%">
            <tr>
              <td><span class="icon-footer ion-md-pin"></span></td>
              <td><span class="text">Jalan Ayer Keroh Lama, 75450 Bukit Beruang, Melaka</span><td>
            </tr>
            <tr>
              <td><span class="icon-footer ion-md-call"></span></td>
              <td><span class="text">+60-123456789</span></td>
            </tr>
            <tr>
              <td><span class="icon-footer ion-md-mail"></span></td>
              <td><span class="text">test@gmail.com</span></td>
            </tr>
          </table>
        </div>
      </div>
      </div>
    </div>
  </div>
  </footer>
  <script src="js/home.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
  </html>
