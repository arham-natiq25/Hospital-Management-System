<?php
 include "confile.php";
 include "Pheader.php";
 if(isset($_POST['submit']))
 {
   $contact=$_POST['contact'];
   $email=$_POST['email'];
  

   $sql="SELECT * FROM doctor_reg WHERE contact= '$contact' and email= '$email' ";

   $query=mysqli_query($con,$sql);
   if(mysqli_num_rows($query)>0)
   {
       $row=mysqli_fetch_array($query);
       $n=$row['contact']; $e=$row['email'];
       $_SESSION['email']=$row['email'];
       $i=$row['id'];
       if($contact==$n && $email==$e)
       {
           header("location:doc-resetpass.php");
       }
       
        
   }
   else
       {
           echo "<div class='text-danger text-center'>You have entered wrong contact no or username</div> <br> ";   
       }
}
?>
<body>
<div class="container mt-5">
        <div class="row p-5">
            <div class="offset-sm-4 col-sm-4">
                <h3>HMS | Doctors Recovery account </h3>
                <p class="text-primary">
                    Recover your account
                </p>
                <form action="" class="p-3" method="post" style="border:1px solid rgb(196, 191, 191)">
                    <p class="small text-secondary">
                        Please Enter your Registered Contact no and Email to recover Your password
                    </p>
                    <input type="number" class="form-control my-2" name="contact"
                        placeholder="Please Enter Your Contact No " required>
                    <input type="email" class="form-control" name="email"
                        placeholder="Please Enter Your Email " required>
                    <br>
                    <button type="submit" class="btn btn-primary text-white" name="submit" >Reset</button>
                    <br> <br>

                    <span class="small text-secondary">Already have account ?</span><span><a href="doctor-login.php"
                            class="text-decoration-none small">login</a></span>
            </div>
            </form>

            <br>
            <br>
            <p class="small text-center">© 2022 HMS. All rights reserved</p>
        </div>
    </div>
    </div>
</body>