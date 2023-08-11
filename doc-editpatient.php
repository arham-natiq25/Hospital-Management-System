<?php
 include  "confile.php";
 include  "Pheader.php";
 $id=$_GET['id'];
 $Pname="";
 $Pemail="";
 $Pcontact="";
 $Paddress="";
 $P_age="";
 $Pmedical="";
if (isset($_GET['id'])) {
    $sql="SELECT * FROM `patient_table` WHERE `uid`='$id' ";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    $Pname=$row['name'];
    $Pemail=$row['email'];
    $Pcontact=$row['contact'];
    $Paddress=$row['address'];
    $P_age=$row['age'];
    $Pmedical=$row['medical'];
}
if(isset($_POST['submit'])) {
    $sql="UPDATE `patient_table` SET name='$_POST[name]' ,email='$_POST[email]' , contact='$_POST[contact]' , address ='$_POST[address]' , age='$_POST[age]', medical='$_POST[medical]'  WHERE `uid`='$id' ";
    $query=mysqli_query($con,$sql);
    if ($query) {
       echo "<script>alert('Update successfully')</script>'";
    header("location:doc-managepatient.php");
   }}
?>
<body>
    <?php include "doc-nav.php"; ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mb-3">
                <div class="top" style="border-bottom: 1px solid #bbb;padding: 50px 0;position: relative;">
                    <h3>Doctors |Edit Patient</h3> <span class="small float-end">User / Dashboard</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-3">
                        <form action="" method="post" class="form-group p-3" style="border: 1px solid black">
                            <table>
                                <label for="username">Patient Name</label>
                                <input type="text" value="<?php echo $Pname; ?>" name="name" class="form-control" >
                                <label for="email">Patient Email id </label>
                                <input type="email" class="form-control  " name="email" value="<?php echo $Pemail; ?>" required>
                                <label for="contact">Patient contact no </label>
                                <input type="contact" class="form-control  " name="contact" value="<?php echo $Pcontact; ?>" required>
                                <label for="gender" class="">Gender :</label> <br>
                                <input type="radio" name="gender" class="me-2" value="femlae">Female
                                <input type="radio" name="gender" class="mx-2" value="male" >Male
                                <br>
                                <label for="address">Patient Address</label>
                                <input type="text" class="form-control " name="address" value="<?php echo $Paddress; ?>" required>
                                <label for="age">Patient age</label>
                                <input type="number" class="form-control " name="age" value="<?php echo $P_age; ?>" required>
                                <label for="medical">Medical History(opt)</label>
                                <input type="text" class="form-control " name="medical" value="<?php echo $Pmedical; ?>">
                                <br>
                                <!-- Button trigger modal -->
                               <button class="btn btn-success" name="submit" type="submit" >Update</button>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>