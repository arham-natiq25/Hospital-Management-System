<?php
 include "confile.php";
 include "Pheader.php";
 error_reporting(null);
 $id=$_GET['id'];
 $sp="";
 $sql="SELECT * FROM `doctor_specialization` WHERE id =`$id`";
 $query=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($query)){
    $sp=$row['specilization'];
 } 

 if(isset($_POST['submit']))
 {

    $spec=$_POST['specialization'];
    $sql1="UPDATE `doctor_specialization` SET specilization='$spec' WHERE id='$id'";
    mysqli_query($con,$sql1);
    header("location:admin-addDSpl.php");
 }  
 

?>

<body>
    <?php include "admin-nav.php"; ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mt-2">
                <div class="top" style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | Edit DOCTOR SPECILIZATION </h3> <span class="small float-end">Admin / Dashboard</span>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-8 mt-3">
                <h4 class="mb-3">Doctor Specilization</h4>
                <form action="" method="post" style="border: 1px solid rgb(211, 205, 205); padding: 30px ">
                    <label for="specialization">Edit Doctor Specilization</label>
                    <input type="text" name="specialization" class="form-control" required value="<?php echo $sp; ?>">
                    <button class="btn btn-outline-primary mt-2 " name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

</body>