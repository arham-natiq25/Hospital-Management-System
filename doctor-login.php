<?php
 include "confile.php";
 include "Pheader.php";
 if (isset($_POST['submit'])) {
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `doctor_reg` WHERE `name`='$name' and `password`='$password'";
    $query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
        $row=mysqli_fetch_array($query);
        $a=$row['authorization'];
        if($a==1){
            $_SESSION['did']=$row['id'];
            $_SESSION['name']=$row['name'];
            header("location:doctor-dashboard.php");
        }else if($a==0){
            echo "<script>alert('Your Account is Not authorized wait for admin authorization .')</script>";       

        }
    }
    else {
        echo "<script>alert('Woops! name or Password is Wrong.')</script>";
    }
 }
?>


<body>

    <div class="container mt-5">
        <div class="row p-5">
            <div class="offset-sm-4 col-sm-4">
                <h3>HMS | DOCTOR LOGIN </h3>
                <p class="text-primary">
                    Sign into your account
                </p>
                <form action="" class="p-3" method="post" style="border:1px solid rgb(196, 191, 191)">
                    <p class="small text-secondary">
                        Please Enter your name and password to login
                    </p>
                    <span class="d-flex justify-content-center align-items-center">
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control my-2" name="username"
                            placeholder="Please Enter Your Username " required>
                    </span>
                    <span class="d-flex justify-content-center align-items-center">
                        <i class="fa fa-lock"></i>
                        <input type="password" class="form-control" name="password"
                            placeholder="Please Enter Your Password " required>
                    </span>
                    <a href="doc-forget.php" class="text-decoration-none text-primary">Forget Password?</a>
                    <br>
                    <span class="small text-secondary">Don't have an account ? </span><span><a href="doctor-reg.php"
                            class="text-decoration-none small">Create an account</a></span>
                    <div class="text-end my-2">
                        <button type="submit" name="submit" class="btn btn-primary text-white">Login</button>
                    </div>
                </form>
                <button class="btn btn-dark mt-4"><a href="index.php" class="text-decoration-none text-white">Back to
                        menu
                    </a></button>
                <br>
                <br>
                <p class="small text-center">© 2022 HMS. All rights reserved</p>
            </div>
        </div>
    </div>
</body>