'<?php

  $con=mysqli_connect("localhost","root","","hms");
  session_start();
  if(!$con)
  {
    die("connection failed ");
  }
  

?>