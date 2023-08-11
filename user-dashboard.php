<?php
include "confile.php";
if (isset($_SESSION['name'])){
     include "Pheader.php";
?>

<body>

    <?php include "user-nav.php";?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12">
                <div class="top" style="border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>USER | DASHBOARD </h3> <span class="small float-end"><?php echo $_SESSION['name'];?>/ Dashboard</span>
                </div>

            </div>
        </div>
    </div>
    <!-- end of page title -->

    <div class="container-fluid bg-white">
        <div class="container"
            style=" border-bottom:1px solid rgb(216, 206, 206);padding-bottom: 80px; padding-top: 100px;">
            <div class="row">
                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular fa-face-smile bg-primary p-2 text-white rounded"></i>
                    <h3>My Profile</h3>
                    <?php
                          $id=$_SESSION['uid'];
                          $sql="SELECT * FROM patient_reg WHERE  id='$id'";
                          $query=mysqli_query($con,$sql);
                          $row=mysqli_fetch_array($query);

                    ?>
                    <p><a href="user-update.php?id=<?php echo $row['id']; ?>" class="small text-primary text-decoration-none">Update Profile </a></p>
                </div>
                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular fa-face-smile bg-primary p-2 text-white rounded"></i>
                    <h3>My Appointment</h3>
                    <p><a href="user-Myapp.php" class="small text-primary text-decoration-none">View Appointment History </a></p>
                </div>
                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular fa-face-smile bg-primary p-2 text-white rounded"></i>
                    <h3>Book My Appointment</h3>
                    <p><a href="user-bookmyapp.php" class="small text-primary text-decoration-none"> Book Appointment </a></p>
                </div>
            </div>
        </div>
        <div class="small text-secondary text-center mt-3"> © 2022 HMS. All rights reserved </div>
    </div>
</body>
<?php
}
else{
    echo "<script>alert(' You are not allowed to access this page')</script>";
}
?>