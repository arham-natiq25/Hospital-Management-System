<?php
  include "confile.php";
  include "Pheader.php";

   
   $id=$_GET['id'];
   $username="";
   $address="";
   $city="";
   $gender="";
   $email="";
   $sql="SELECT * FROM `patient_reg` WHERE `id`='$id'";
   $query=mysqli_query($con,$sql);
   while ($row=mysqli_fetch_array($query)) {
    $username=$row['username'];
    $address=$row['address'];
    $city=$row['city'];
    $email=$row['email'];
   }




   if(isset($_POST['submit'])) {
    $sql="UPDATE `patient_reg` SET username='$_POST[username]' , address ='$_POST[address]', city ='$_POST[city]' , gender ='$_POST[gender]' WHERE id='$id' ";
    mysqli_query($con,$sql);
    echo "<script>alert('Update successfully')</script>'";
    header("location:user-dashboard.php");
   }
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
                    <h3>USER | Update Profile </h3> <span class="small float-end"><?php echo $_SESSION['name']; ?> / Dashboard</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 p-3">
                <form action="" method="post" class="form-group p-3" style="border: 1px solid black">
                    <table>
                        
                        <label for="address">UserName</label>
                        <input type="text" class="form-control " name="username" value="<?php echo $username; ?>">
                        <label for="address">Address</label>
                        <input type="text" class="form-control " name="address" value="<?php echo $address; ?>">
                        <label for="city">City</label>
                        <input type="text" class="form-control " name="city" value="<?php echo $city; ?> ">
                        <label for="gender" class="">Gender :</label> <br>
                        <input type="radio" name="gender" class="me-2" value="female">Female
                        <input type="radio" name="gender" class="mx-2" value="male">Male
                        <br>
                        <label for="email">Email</label>
                        <input type="email" class="form-control  " name="email" disabled value=" <?php echo $email; ?>">
                        <div class="text-end">
                            <button type="submit" name="submit" class="btn btn-primary mt-3">Update</button>
                        </div>
                    </table>
                </form>
            </div>
        </div>
    </div>


</body>