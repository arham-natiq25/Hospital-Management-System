<?php
 include "confile.php";
 include "Pheader.php";
 $id=$_GET['id'];
if(isset($_GET['id'])){
$sql="SELECT * FROM patient_table WHERE `uid`='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
$name=$row['name'];
$contact=$row['contact'];
$email=$row['email'];
$age=$row['age'];
$address=$row['address'];
$gender=$row['gender'];
$med=$row['medical'];
$reg=$row['creation_date'];
}
$sql2="SELECT * FROM `medicalhistory` WHERE `uid`='$id' ";
$query2=mysqli_query($con,$sql2);

if(isset($_POST['submit'])){
    $sql2="SELECT * FROM `medicalhistory` WHERE `uid`='$id' ";
    $query2=mysqli_query($con,$sql2);
    $row=mysqli_fetch_array($query2);
    $name=$row['name'];
    $email=$row['email'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $bt=$_POST['bt'];
    $pres=$_POST['prescription'];
    $did=$_SESSION['did'];

    $ins="INSERT INTO `medicalhistory`(`name`, `email`, `uid`, `did`, `bp`, `sugar`, `weight`, `temp`, `prescription`)
     VALUES ('$name','$email','$id','$did','$bp','$bs','$weight','$bt','$pres')";
     $query=mysqli_query($con,$ins); 
     header("location:doc-managepatient.php");   
}

 
 ?>
<body>
    <?php include "doc-nav.php";     ?>
<div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mb-3">
                <div class="top" style="border-bottom: 1px solid #bbb;padding: 50px 0;position: relative;">
                    <h3>Doctors | View Patient</h3> <span class="small float-end">User / Dashboard</span>
                </div>
            </div>
        </div>
    </div>
<div class="main-content mt-5">
        <div class="wrap-content container" id="container">

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">

                        <table border="1" class="table table-bordered">
                            <?php

                            ?>
                            <tr align="center">
                                <td colspan="4" style="font-size:20px;color:blue">
                                    Patient Details</td>
                            </tr>

                            <tr>
                                <th scope>Patient Name</th>
                                <!-- php -->
                                <td><?php echo $name; ?></td>  
                                <th scope>Patient Email</th>
                                <!-- php -->
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <th scope>Patient Mobile Number</th>
                                <!-- php -->
                                <td><?php echo $contact; ?></td>
                                <th>Patient Address</th>
                                <!-- php  -->
                                <td><?php echo $address; ?> </td>
                            </tr>
                            <tr>
                                <th>Patient Gender</th>
                                <!-- php  -->
                                <td><?php echo $gender; ?></td>
                                <!-- php  -->
                                <th>Patient Age</th>
                                <td><?php echo $age; ?></td>
                            </tr>
                            <tr>

                                <th>Patient Medical History(if any)</th>
                                <!-- php  -->
                                <td><?php echo $med; ?></td>
                                <!-- php  -->
                                <th>Patient Reg Date</th>
                                <td><?php echo $reg; ?></td>
                            </tr>

                        </table>
                        <!-- Here we can write php -->
                       
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <tr align="center">
                                <th colspan="8">Medical History</th>
                          
                            <tr>
                                <th>#</th>
                                <th>Blood Pressure</th>
                                <th>Weight</th>
                                <th>Blood Sugar</th>
                                <th>Body Temprature</th>
                                <th>Medical Prescription</th>
                                <th>Visit Date</th>
                            </tr>
                            </tr>
                         
                            <tr>
                            <?php
                        $i=1;
                        
                         if(mysqli_num_rows($query2)>0){
                         while($row1=mysqli_fetch_array($query2)){

                        ?>
                                <!-- php  -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row1['bp']; ?></td>
                                <td><?php echo $row1['weight']; ?></td>
                                <td><?php echo $row1['sugar']; ?></td>
                                <td><?php echo $row1['temp']; ?></td>
                                <td><?php echo $row1['prescription']; ?></td>
                                <td><?php echo $row1['creation_date']; ?></td>
                                
                            </tr>
                            <?php
                    $i++;
                 }}?>
                        </table>

                    </div>
                    
                </div>
                    <form action="" method="post">
                                <button type="button"  class="btn btn-primary float-end " data-bs-toggle="modal"
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
                            </form>     
</body>
