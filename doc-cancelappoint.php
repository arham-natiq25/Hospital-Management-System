<?php
include "confile.php";
$id=$_GET['id'];
if(isset($_GET['id'])){

    $sql="DELETE FROM `appointments` WHERE `id`=$id ";
    $query=mysqli_query($con,$sql);
    header("location:doc-app.php");
}

?>