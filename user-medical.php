<?php
 include "confile.php";
 include "Pheader.php";
 $id=$_SESSION['uid'];
$sql="SELECT * FROM patient_table WHERE `uid`='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
if(isset($row['name'])){
$name=$row['name'];
$contact=$row['contact'];
$email=$row['email'];
$age=$row['age'];
$address=$row['address'];
$gender=$row['gender'];
$med=$row['medical'];
$reg=$row['creation_date'];

$sql2="SELECT * FROM `medicalhistory` WHERE `uid`='$id' ";
$query2=mysqli_query($con,$sql2);

?>

<body>
    <?php
     include "user-nav.php";
    ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12">
                <div class="top" style="border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>USER | Medical History </h3> <span class="small float-end"><?php echo $_SESSION['name']; ?> / Dashboard</span>
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

</body>

<?php
}else{
    
    include "user-nav.php";
    ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12">
                <div class="top" style="border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>USER | Medical History </h3> <span class="small float-end"><?php echo $_SESSION['name']; ?> / Dashboard</span>
                </div>
            </div>
            <h3>No Medical History Availaible</h3>
        </div>
    </div>
<?php
}
?>