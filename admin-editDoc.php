<?php
 include "confile.php";
 include "Pheader.php";
 $id=$_GET['id'];
 
    $spc="";
    $name="";
    $address="";
    $fee="";
    $contact="";
    $email="";
    $sql="SELECT * FROM `doctor_reg` where `id`='$id'";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($query)){
    $spc=$row['specilization'];
    $name=$row['name'];
    $address=$row['address'];
    $fee=$row['fee'];
    $contact=$row['contact'];
    $email=$row['email'];
    }

    if(isset($_POST['submit'])){
    $update="UPDATE `doctor_reg` SET`specilization`='$_POST[docSpe]',`name`='$_POST[Dname]',`address`='$_POST[Daddress]',`fee`='$_POST[fee]',`contact`='$_POST[contact]' WHERE `id`=$id";
    $query=mysqli_query($con,$update);
    if($query)
    { 
     echo '<script> alert("Record Updated Successfully") </script>';
     header("location:admin-mandoc.php");
    }
    else echo "try again";

    }

 ?>

<body>
    <?php include "admin-nav.php";?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12">
                <div class="top" style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | Edit Doctor Profile </h3> <span class="small float-end">Admin / Dashboard</span>
                </div>
            </div>

        </div>

    </div>
    <div class="container mt-2">

        <div class="row d-flex justify-content-center align-items-center">

            <div class=" col-9 m-3 p-3">
                <form action="" method="post" class="form-group p-5" style="border: 1px solid black">
                    <label for="docSpe">Doctor's Specilization</label>
                    <select class="form-select " aria-label="Default select example" value="<?php echo $spc; ?>"
                        name="docSpe" >
                        <?php
                
                $sql="SELECT * FROM `doctor_specialization`";
                $query=mysqli_query($con,$sql);
                echo "<option disabled selected >Select Specilization</option>";
                while($row=mysqli_fetch_array($query)){
                    $spc=$row['specilization'];
                    echo "<option value=".$spc."  >"; echo $spc; "</option>";
                }

                ?>


                    </select>
                    <br>
                    <label for="Dname">Doctors Name</label>
                    <input type="text" class="form-control " name="Dname" value="<?php echo $name; ?>" required>

                    <label for="docSpe">Doctor's</label>
                    <label for="Daddress">Doctors Clinical Address</label>
                    <input type="text" class="form-control " value="<?php echo $address; ?>" name="Daddress" required>

                    <label for="fee">Consultant fee</label>
                    <input type="text" class="form-control " value="<?php echo $fee; ?>" name="fee" required>

                    <label for="contact">Doctor Contact no </label>
                    <input type="text" class="form-control " value="<?php echo $contact; ?>" name="contact" required>

                    <label for="email">Doctor Email no </label>
                    <input type="email" class="form-control " value="<?php echo $email; ?>" name="email" disabled>

                    <button type="submit" class="btn btn-outline-primary mt-2 float-end" name="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>


</body>