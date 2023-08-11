<?php
 include "confile.php";
 include "Pheader.php";
?>
<?php
 if (isset($_POST['submit'])) {
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `patient_reg` WHERE `username`='$name' and `password`='$password'";
    $query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
        $row=mysqli_fetch_array($query);
            $_SESSION['uid']=$row['id'];
            $_SESSION['name']=$row['name'];
            header("location:user-dashboard.php");
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
                <h3>HMS | PATIENT LOGIN </h3>
                <p class="text-primary">
                    Sign into your account
                </p>
                <form action="" class="p-3" method="post" style="border:1px solid rgb(196, 191, 191)">
                    <p class="small text-secondary">
                        Please Enter your name and password to login
                    </p>
                   
                    <input type="text" class="form-control my-2" name="username" placeholder="Please Enter Your Username " required>
                    <input type="password" class="form-control" name="password"
                        placeholder="Please Enter Your Password " required>
                    <a href="user-forget.php" class="text-decoration-none text-primary">Forget Password?</a>
                    <br>
                    <div class="text-end my-2">
                        <button type="submit" name="submit" class="btn btn-primary text-white">Login</button>
                    </div>

                    <span class="small text-secondary">Don't have an account ? </span><span><a href="user-registration.php"
                            class="text-decoration-none small">Create an account</a></span>
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