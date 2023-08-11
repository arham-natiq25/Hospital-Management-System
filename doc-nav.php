<?php
 include "confile.php";
?>
<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hospital Management System
        </a>
        <div class="dropdown ms-auto">
           <span class="h5">Welcome</span>
        <button class="btn btn-success dropdown-toggle px-4" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="true">
            <?php echo $_SESSION['name'];?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="doctor-dashboard.php">DASHBOARD</li>
            <?php
                          $id=$_SESSION['did'];
                          $sql="SELECT * FROM doctor_reg WHERE  id='$id'";
                          $query=mysqli_query($con,$sql);
                          $row=mysqli_fetch_array($query);
            ?>
            <li><a class="dropdown-item" href="doc-update.php?id=<?php echo  $row['id']; ?>">My profile</li>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
        </ul>
    </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <i class="fa-solid fa-bars"></i> </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">HMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="doctor-dashboard.php">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doc-app.php">Appointment History</a>
                    </li>
                    <div class="dropdown">
                        <li class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="nav-link" href="#">
                                Patients
                            </a>
                        </li>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="doc-addpatient.php">Add Patient</a></li>
                            <li><a class="dropdown-item" href="doc-managepatient.php">Manage Patients</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br> <br>
<!-- As a heading -->
