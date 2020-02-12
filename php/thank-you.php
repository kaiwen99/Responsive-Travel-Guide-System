<!DOCTYPE html>
<html>
  <head>
    <title>Thank You!</title>
  </head>
  <body style="background-color:grey">
    <h1>THANK YOU!</h1>
    <p>
      We have received your order, and will get back to you as soon as possible.
    </p>
<?php
header( "refresh:5;url=../welcome.php" );
echo 'Will bring you back to homepage within 5 seconds';
?>
  </body>
</html>
