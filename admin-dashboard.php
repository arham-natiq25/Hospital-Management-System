<?php
 include "confile.php";
 if (isset($_SESSION['aid'])){
    include "Pheader.php";
?>

<head>
    <style>
        .top {
            border-bottom: 1px solid #eee;
            padding: 30px 0 30px 0;

        }
    </style>
</head>


<body>

<?php include "admin-nav.php"; ?>
    <!-- Top interface -->
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mt-2">
                <div class="top"  style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | DASHBOARD </h3> <span class="small float-end"><?php echo $_SESSION['name'];?> / Dashboard</span>
                </div>

            </div>
        </div>
    </div>
    <!-- end of page title -->
    <!-- dashboard -->

    <div class="container-fluid bg-white d-flex justify-content-center align-items-center">
        <div class="container-fluid" style="padding-bottom: 80px; padding-top: 50px; margin-left :7%;">
            <div class="row">
                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular fa-face-smile bg-primary p-2 text-white rounded"></i>
                    <h3>Manage Users</h3>
                    <?php
                    $sql="SELECT * FROM `patient_reg` ";
                    $res= mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($res);
                    $count = count($row);
                    ?>
                    <p><a href="admin-manuser.php" class="small text-primary text-decoration-none">Total users : <?php echo $count ;?>  </a></p>
                </div>
                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular bi bi-people bg-primary p-2 text-white rounded"></i>
                    <h3>Manage Doctors</h3>
                    <?php
                    $sql="SELECT * FROM `doctor_reg` ";
                    $res= mysqli_query($con,$sql);
                    $row=mysqli_fetch_assoc($res);
                    $count = count($row);
                    ?>
                    <p><a href="admin-mandoc.php" class="small text-primary text-decoration-none">Total Doctors :<?php echo $count ;?> </a></p>
                </div>


                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular  bg-primary p-2 text-white rounded">
                        <__</i> <h3>Appointments</h3>
                        <?php
                        $sql="SELECT * FROM `appointments` ";
                        $res= mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($res);
                        $count =count($row);
                        ?>
                            <p><a href="admin-patHis.php" class="small text-primary text-decoration-none">Total Appointments:<?php echo $count ;?> </a></p>
                </div>
                <div class="col-sm-3 p-5 m-2 text-center" style="border:1px solid rgb(216, 206, 206) ;">
                    <i class="h4 fa-regular fa-face-smile bg-primary p-2 text-white rounded"></i>
                    <h3>Manage Patients</h3>
                    <?php
                        $sql="SELECT * FROM `patient_table` ";
                        $res= mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($res);
                        $count = count($row);
                        ?>
                    <p><a href="admin-viewpat.php" class="small text-primary text-decoration-none"> Total Patients : <?php echo $count ;?></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="small text-secondary text-center mt-1 p-3" style="border-top:1px solid rgb(216, 206, 206);"> © 2022 HMS.
        All
        rights reserved </div>
    </div>

</body>

  <?php  }
  else{
    
    echo '<script>alert("OOPS!!! You are not allowed to open this page") </script>'; }

  
  ?>