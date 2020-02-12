<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive web based Travel Guide System </title>
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="nav">
      <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="Tour.php">Tour</a></li>
        <li><a href="products.php">Souvenir</a></li>
        <li><a href="../welcome.php">Home</a></li>
      </ul>
      <div>
        <img class="logo" src="../pic/logo.png">
      </div>
    </div>
    <div class="slide" style="max-width:100% ;max-height:500px" >
      <div class="hide-display">
        <img src="../pic/airplane.jpg" style="width:100%">
        <div class="centered text-bold text-large text-black" style= "margin-left:-200pt;" >Holiday is coming soon!</div>
      </div>
      <div class="hide-display" >
        <div><img  src="../pic/shipping.jpg" style="width:100%"></div>
        <div class="centered text-bold text-large text-black" style="margin-top:-10pt;margin-left:-200pt;">Free Shipment for the souvenirs!</div>
        <div class="centered text-bold text-black" style="margin-top:30pt;margin-left:-200pt;">*Term and Conditions applied</div>
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
            <span class="subheading text-bold">States in Malaysia</span>
            <h2>There are 11 states in Malaysia which let you feel the harmonius of the country</h2>
          </div>
          <div class="row-featured">
            <div class="column-featured">
              <div class="destination">
                <a class="featured-picture" style="background-image: url('../pic/States/johor.jpg');" href="Tour.php"></a>
                <div class="destination-description">
                  <h3><a href="Tour.php">Johor</a></h3>
                  <span class="price">Suggested budget: RM100 per day</span>
                  <p>Recommend place: Legoland, Desaru.</p>
                </div>
              </div>
            </div>
            <div class="column-featured">
              <div class="destination">
                <a class="featured-picture" style="background-image: url('../pic/States/kedah.jpg');" href="Tour.php"></a>
                <div class="destination-description">
                  <h3><a href="Tour.php">Kedah</a></h3>
                  <span class="price">Suggested budget: RM100 per day</span>
                  <p>Recommend place: Langkawi, Kuah</p>
                </div>
              </div>
            </div>
            <div class="column-featured">
              <div class="destination">
                <a class="featured-picture" style="background-image: url('../pic/States/penang.jpg');" href="Tour.php"></a>
                <div class="destination-description">
                  <h3><a href="Tour.php">Penang</a></h3>
                  <span class="price">Suggested budget: RM150 per day</span>
                  <p>Recommend place: George Town, Batu Ferringhi</p>
                  </div>
                </div>
              </div>
              <div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/KL.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Kuala Lumpur</a></h3>
                    <span class="price">Suggested budget: RM150 per day</span>
                    <p>Most recommend place: Petronas Twin Tower, Batu Caves</p>
                  </div>
                </div>
              </div>
              <div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/melaka.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Melaka</a></h3>
                    <span class="price">Suggested budget: RM80 per day</span>
                    <p>Recommend place: A Famosa, Christ Church</p>
                  </div>
                </div>
              </div>
              <div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/sabah.webp');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Sabah</a></h3>
                    <span class="price">Suggested budget: RM90 per day</span>
                    <p>Recommend place: Kota Kinabalu, Sandakan</p>
                  </div>
                </div>
              </div>
              <div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/Negeri Sembilan.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Negeri Sembilan</a></h3>
                    <span class="price">Suggested budget: RM70 per day</span>
                    <p>Recommend place: Port Dickson, Teluk Kemang</p>
                  </div>
                </div>
              </div>
              <div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/Pahang.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Pahang</a></h3>
                    <span class="price">Suggested budget: RM75 per day</span>
                    <p>Recommend place: Genting Highland, Tioman island</p>
                  </div>
                </div>
              </div><div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/Perlis.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Perlis</a></h3>
                    <span class="price">Suggested budget: RM70 per day</span>
                    <p>Recommend place: Kuala Perlis, Kangar</p>
                  </div>
                </div>
              </div><div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/Sarawak.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Sarawak</a></h3>
                    <span class="price">Suggested budget: RM75 per day</span>
                    <p>Recommend place: Kuching, Miri</p>
                  </div>
                </div>
              </div><div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/States/Terrenganu.jpg');" href="Tour.php"></a>
                  <div class="destination-description">
                    <h3><a href="Tour.php">Terrenganu</a></h3>
                    <span class="price">Suggested budget: RM80 per day</span>
                    <p>Recommend place: Perhentian Island, Redang Island</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="featured">
          <div class="container">
            <div class="header-content">
              <span class="subheading text-bold">Popular Entertainment in Malaysia</span>
              <h2>There is some places in Malaysia must go there to make the journey more memorable!</h2>
            </div>
            <div class="row-featured">
              <div class="column-featured">
                <div class="destination">
                  <a class="featured-picture" style="background-image: url('../pic/Entertainment/Genting_Highland.webp');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Genting Highland</a></h3>
                      <span class="price">Average budget: RM500 per trip</span>
                      <p>A place for fun and cool gateway. The highlight of the place will be Arena of Stars and the theme park!</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/Entertainment/legoland.webp');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Legoland</a></h3>
                      <span class="price">
                        <table style="margin-top:-20pt;">
                          <tr >
                            <td>Adult: </td>
                            <td>RM100 per person</td>
                          </tr>
                          <tr>
                            <td>Children/Senior Citezen: </td>
                            <td>RM60 per person</td>
                          </tr>
                        </table>
                      </span>
                      <p>The only theme park in south east asia, kids will love this place especially Water Park and Lego City.</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/Entertainment/Mount_Kinabalu.webp');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Mount Kinabalu</a></h3>
                      <span class="price">Average budget: RM400 per trip</span>
                      <p>Most important location in Malaysia in terms of biodiversity. It is the tallest mountain within the Malay Archipelago.</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/Entertainment/Port_Dickson.webp');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Port Dickson</a></h3>
                      <span class="price">Average budget: RM650 per trip</span>
                      <p>Port Dickson is one of the top destinations for a beach resort getaway in Malaysia. The most reconmmend place is Turtle Hatchery Centre and Army Museum</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/Entertainment/street_art.jpg');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Penang Street Art</a></h3>
                      <span class="price">Average budget: It's free!</span>
                      <p>Most popular tourist in Penang. It is a historical arts proves that our cutural in Malaysia</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured">
            <div class="container">
              <div class="header-content">
                <span class="subheading text-bold">Popular food and bevarages in Malaysia</span>
                <h2>Malaysia is a multicultural country makes we have different types of delicious cuisine!</h2>
              </div>
              <div class="row-featured">
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/F&B/ais kacang.jpg');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Ais Kacang</a></h3>
                      <span class="price">Average Price: RM5 each</span>
                      <p>A Malay desert of shaved ice, fruits, beans, sweetcorn, grass jelly, condensed or evaporated milk and fruit syrups.</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/F&B/Laksa.jpg');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Laksa</a></h3>
                      <span class="price">Average price: RM8 each</span>
                      <p>A hot and sour seafood soup with coconut milk.</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/F&B/Nasi Lemak.jpg');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Nasi Lemak</a></h3>
                      <span class="price">Average price: RM 7 each</span>
                      <p>Rice steamed with coconut milk, served with dried acnhovies, sambal, peanuts and eggs, the national dish.</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/F&B/teh ais.jpg');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Teh Ais</a></h3>
                      <span class="price">Average price: RM2 each</span>
                      <p>Can be called as iced milky tea, Malaysian favourite.</p>
                    </div>
                  </div>
                </div>
                <div class="column-featured">
                  <div class="destination">
                    <a class="featured-picture" style="background-image: url('../pic/F&B/rojak.jpg');" href="Tour.php"></a>
                    <div class="destination-description">
                      <h3><a href="Tour.php">Rojak</a></h3>
                      <span class="price">Average price: RM5 each</span>
                      <p>A spicy fruit or vegetable salad, plus other ingredients such as fried tofu and youtiao(Chinese crullers)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="subscribe" style="height: 250pt; margin-top: -40pt; margin-bottom: -30pt;">
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
                      <p style="margin-right:15pt">This is a Guiding page to guide tourist easily</p>
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
<script src="../js/home.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
  </html>
