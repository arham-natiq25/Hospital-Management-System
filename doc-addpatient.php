<?php
 include "confile.php";
 include "Pheader.php";

    

 if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $medical=$_POST['medical'];
    $did=$_SESSION['did'];
    $bp=$_POST['bp'];
    $sugar=$_POST['bs'];
    $temp=$_POST['bt'];
    $weight=$_POST['weight'];
    $pres=$_POST['prescription'];

    $sql="SELECT * FROM `patient_reg` WHERE email='$email'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    $user_id=$row['id'];
    $e=$row['email'];
    if($e==$email){
    $ins="INSERT INTO `patient_table`(`uid`,`did`, `name`, `email`,contact, `gender`, `address`, `age`, `medical`) 
     VALUES ('$user_id','$did','$name','$email','$contact','$gender','$address','$age','$medical')";
     $que1=mysqli_query($con,$ins);
     if($que1){
    $ins="INSERT INTO `medicalhistory` (`name`, `email`, `did`,`uid`, `bp`, `sugar`, `weight`, `temp`, `prescription`) 
    VALUES ('$name','$email','$did','$user_id','$bp','$sugar','$weight','$temp','$pres')"; 
    $que2=mysqli_query($con, $ins);
     
    if($que2){
    header("location:doc-addpatient.php");}
    else
     echo '<script>alert("Try again Error")</script>';
    }
 }
 else{
   echo '<script>alert("Incorrect email of user")</script>';

 }
}

?>

<body>
    <?php  include 'doc-nav.php'; ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mb-3">
                <div class="top" style="border-bottom: 1px solid #bbb;padding: 50px 0;position: relative;">
                    <h3>Doctors | Add Patient | Enter Details of Registered Patient</h3> <span
                        class="small float-end">User / Dashboard</span>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-3">
                        <form action="" method="post" class="form-group p-3" style="border: 1px solid black">
                            <table>
                                <label for="username">Patient Name</label>
                                <input type="text" value="" name="username" class="form-control" required>
                                <label for="email">Patient Email id </label>
                                <input type="email" class="form-control  " name="email" required>
                                <label for="contact">Patient contact no </label>
                                <input type="contact" class="form-control  " name="contact" required>
                                <label for="gender" class="">Gender :</label> <br>
                                <input type="radio" name="gender" class="me-2" value="femlae">Female
                                <input type="radio" name="gender" class="mx-2" value="male">Male
                                <br>
                                <label for="address">Patient Address</label>
                                <input type="text" class="form-control " name="address" required>
                                <label for="age">Patient age</label>
                                <input type="number" class="form-control " name="age" required>
                                <label for="medical">Medical History(opt)</label>
                                <input type="text" class="form-control " name="medical" required>
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add Medical History
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-center" id="exampleModalLabel">Add Medical History</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="bp">Blood Pressure</label>
                                                <input type="text" value="" name="bp" class="form-control" required>
                                                <label for="bs">Blood Sugar</label>
                                                <input type="text" value="" name="bs" class="form-control" required>
                                                <label for="weight">Weight</label>
                                                <input type="text" value="" name="weight" class="form-control" required>
                                                <label for="bt">Body Tempreture</label>
                                                <input type="text" value="" name="bt" class="form-control" required>
                                                <label for="prescription">Prescription</label>
                                                <textarea name="prescription" class="form-control" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>