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
            <?php echo $_SESSION['name']; ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="admin-dashboard.php">DASHBOARD</li>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
        </ul>
    </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <i class="fa-solid fa-bars"></i> </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">HMS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin-dashboard.php"><i
                                    class="bi bi-house p-2"></i>DASHBOARD</a>
                        </li>

                        <div class="dropdown">
                            <li class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person p-2"></i>
                                    Doctors
                                </a>
                            </li>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin-addDSpl.php">Doctors Specilization</a></li>
                                <li><a class="dropdown-item" href="admin-addDoc.php">Add Doctors</a></li>
                                <li><a class="dropdown-item" href="admin-mandoc.php">Manage Doctors</a></li>
                                <li><a class="dropdown-item" href="admin-authDoc.php">Status of Doctors</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <li class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person p-2"></i> Users
                                </a>
                            </li>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin-manuser.php">Manage Users</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <li class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person p-2"></i>
                                    Patients
                                </a>
                            </li>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin-viewpat.php">Manage Patients</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin-patHis.php"><i class="bi bi-person p-2"></i>
                                Appointment History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin-searchpat.php"><i class="bi bi-search p-2"></i>
                                Patient Search</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br> <br>
    <!-- As a heading -->
    
