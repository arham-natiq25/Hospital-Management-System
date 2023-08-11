<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hospital Management System</title>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm p-0">
        <div class="container">
            <a class="navbar-brand nblue" href="#">Hospital Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">Click</span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item bg-primary">
                        <a class="nav-link text-white p-4" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item bg-primary">
                        <form action="https://formsubmit.co/checkmebaby@gmail.com"  method="post">
                        <a class="nav-link text-white p-4" data-bs-toggle="modal" href="#" data-bs-target="#exampleModal">CONTACT</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Contact us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name">Name</label>
                    <input type="text" value="" name="name" class="form-control" required>
                    <label for="email">Email</label>
                    <input type="email" value="" name="email" class="form-control" required>
                    <label for="description">description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
</form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="slidder">
        <div class="container-fluid">
            <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="images/slider-image1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item " data-bs-interval="3000">
                        <img src="images/slider-image2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
    </section>
    <section id="login">
        <div class="container-fluid bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-3">
                        <div class="box p-3 text-primary d-flex justify-content-center align-items-center">
                            <div class="one">
                                <img src="images/grid-img3.png " class="img-fluid" alt="">
                            </div>
                            <div class="two mt-3 ms-2">
                                <h3>Patients</h3>
                                <p class="small">Register and Book Appointment</p>
                                <p><a href="user-login.php" class="text-secondary ">Click here</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="box p-3 text-primary d-flex justify-content-center align-items-center">
                            <div class="one">
                                <img src="images/grid-img2.png " class="img-fluid" alt="">
                            </div>
                            <div class="two mt-3 ms-2">
                                <h3>Doctor Login</h3>
                                <p><a href="doctor-login.php" class="text-secondary ">Click here</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="box p-3 text-primary d-flex justify-content-center align-items-center">
                            <div class="one">
                                <img src="images/grid-img1.png " class="img-fluid" alt="">
                            </div>
                            <div class="two mt-3 ms-2">
                                <h3>Admin Login</h3>
                                <p><a href="admin-login.php" class="text-secondary ">Click here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container-fluid bg-dark p-5">
            <div class="text-center text-white">
                Hospital Management System <br> copyright@2022  
            </div>
        </div>
    </section>
</body>

</html>