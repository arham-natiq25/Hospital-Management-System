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
            <li><a class="dropdown-item" href="user-dashboard.php">DASHBOARD</li>
            <?php
                          $id=$_SESSION['uid'];
                          $sql="SELECT * FROM patient_reg WHERE  id='$id'";
                          $query=mysqli_query($con,$sql);
                          $row=mysqli_fetch_array($query);
            ?>
            <li><a class="dropdown-item" href="user-update.php?id=<?php echo  $row['id']; ?>">My profile</li>
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
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="user-dashboard.php">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-bookmyapp.php">BOOK APPOINTMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-Myapp.php">Appointment History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-medical.php">Medical History</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</nav>

<!-- As a heading -->
<div class="container-fluid mt-3">
    <nav>
   
    </nav>
    <div>