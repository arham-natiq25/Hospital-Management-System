<?php
  include "confile.php";

  session_destroy();
  header("location:index.php");
?>