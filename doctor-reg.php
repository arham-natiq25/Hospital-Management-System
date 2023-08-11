<?php
 include "confile.php";
 include "Pheader.php";

 if(isset($_POST['submit'])){
    $spc=$_POST['docSpe'];
    $Dname=$_POST['Dname'];
    $Daddress=$_POST['Daddress'];
    $fee=$_POST['fee'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
     $password=$_POST['password'];
    $cpass=$_POST['conpass'];

    if($password==$cpass){
        $sql="SELECT * FROM `doctor_reg` WHERE email='$email'";
        $query=mysqli_query($con,$sql);

        if(!mysqli_num_rows($query)>0){
            $sql="INSERT INTO `doctor_reg`(`specilization`, `name`, `address`, `fee`, `contact`, `email`, `password`)
             VALUES ('$spc','$Dname','$Daddress','$fee','$contact','$email','$password')";
            $query=mysqli_query($con,$sql) or die (mysqli_error($con));
            if($query)
            {
             echo '<script> alert("Registration Successfull wait for admin authorization ") </script>';
             $spc="";
             $Dname="";
             $Daddress="";
             $fee="";
             $contact="";
             $email="";
             $password="";
             $cpass="";
             header("location:doctor-login.php");
            }
            else
            {
             echo '<script> alert("please try again")</script>';
            } 
        }else {
            echo '<script>alert("OOPS!!! Email already exsists") </script>'; 
        }

    }
    else
    {
        echo '<script> alert("Password not matched try again") </script>';
    }


 }


?>
<body>
<div class="container mt-2">
        <div class="row p-3">
        <div class="row d-flex justify-content-center align-items-center">

                <h4 class="text-center" >HMS | Doctor Registration </h4>
                <p class="text-center text-primary">
                    Sign Up
                </p>
                <form action="" class="p-3" method="post" style="border:1px solid rgb(196, 191, 191)">
                    <p class="small text-secondary text-center">
                        Please Enter Personal details below :
                    </p>
                    <div class="row d-flex justify-content-center align-items-center">
            <div class=" col-9 p-3">
                <form action="" method="post" class="form-group p-3" style="border: 1px solid black">
                    <label for="docSpe">Doctor's Specilization</label>
                    <select class="form-select " aria-label="Default select example" name="docSpe" required>
                <?php
                $sql="SELECT * FROM `doctor_specialization` ";
                $query=mysqli_query($con,$sql);
                echo "<option selected>Select Specilization</option>";
                while($row=mysqli_fetch_array($query)){
                    $spc=$row['specilization'];
                    echo "<option value=".$spc." >"; echo $spc; "</option>";
                }

                ?>
                        

                    </select>
                    <?php
                
                    ?>
                    <br>
                    <label for="Dname">Doctors Name</label>
                    <input type="text" class="form-control " name="Dname" required>
                    
                    <label for="docSpe">Doctor's</label>
                    <label for="Daddress">Doctors Clinical Address</label>
                    <input type="text" class="form-control "  name="Daddress" required>
                    
                    <label for="fee">Consultant fee</label>
                    <input type="text" class="form-control "  name="fee" required>
                    
                    <label for="contact">Doctor Contact no </label>
                    <input type="text" class="form-control "  name="contact" required>
                    
                    <label for="email">Doctor Email no </label>
                    <input type="email" class="form-control "  name="email" required>
                    
                    <label for="password">Password</label>
                    <input type="password" class="form-control "  name="password" required>
                    
                    <label for="conpass">Confirm Password</label>
                    <input type="password" class="form-control "  name="conpass" required>
                    <span class="small text-secondary">Already have an account? </span><span><a href="doctor-login.php"
                            class="text-decoration-none small">Log-in</a></span>
                    <br>
                    <button type="submit"  class="btn btn-outline-primary mt-2 float-end" name="submit" >Submit</button>

                </form>
            </div>
        </div>

</body>