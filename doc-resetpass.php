<?php
include "confile.php";
include "Pheader.php";
if(isset($_POST['submit']))
{
 $pass=$_POST['password'];
 $cpass=$_POST['cpassword'];
 if($pass==$cpass)
 {
    $e=$_SESSION['email'];
    $sql="UPDATE `doctor_reg` SET `password`='$pass' WHERE email='$e'";
    $query=mysqli_query($con,$sql);
    echo '<script> alert("Your Password is updated")</script>';
    session_destroy();
    header("location:doctor-login.php");
 }
 else
 {
    echo '<script> alert("please try again your password and confirm password are not same")</script>';
 }
}

?>
<body>
<div class="container mt-5">
        <div class="row p-5">
            <div class="offset-sm-4 col-sm-4">
                <h3>HMS | Doctors Reset Password </h3>
                <p class="text-primary">
                   Please Enter Your Password
                </p>
                <form action="" class="p-3" method="post" style="border:1px solid rgb(196, 191, 191)">
                   
                    
                    <span class="d-flex justify-content-center align-items-center p-3">
                        <i class="fa fa-lock me-2"></i>
                        <input type="password" class="form-control" name="password"
                            placeholder="Please Enter Your New Password " required>
                    </span>
                    <span class="d-flex justify-content-center align-items-center p-3">
                        <i class="fa fa-lock me-2"></i>
                        <input type="password" class="form-control" name="cpassword"
                            placeholder="Please Enter Your Password again" required>
                    </span>
                    <a href="doctor-login.php"
                            class="text-decoration-none small">login</a>
                    <br>
                    <div class="text-end my-2">
                        <button type="submit" name="submit" class="btn btn-primary text-white">Update</button>
                    </div>
                </form>
                <br>
                <br>
                <p class="small text-center">© 2022 HMS. All rights reserved</p>
            </div>
        </div>
    </div>


</body>