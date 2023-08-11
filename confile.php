'<?php

  $con=mysqli_connect("localhost","root","","hospital");
  session_start();
  if(!$con)
  {
    die("connection failed ");
  }
  

?>