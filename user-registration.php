<?php
 include "confile.php";
 include "Pheader.php";
 include "jquery.php";
?>
<?php
 if(isset($_POST['submit']))
 {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword){
        $sql="SELECT * FROM patient_reg WHERE email='$email' ";
        $query=mysqli_query($con,$sql);

        if(!mysqli_num_rows($query)>0)
            {
              $sql="INSERT INTO `patient_reg`(`name`,`username`, `address`, `city`, `gender`, `email`, `password`)
              VALUES ('$name','$username','$address','$city','$gender','$email','$password')";
              $query=mysqli_query($con,$sql) or die(mysqli_connect_error($con));
               if($query)
               {
                echo '<script> alert("Registration Successfull") </script>';
                $name="";
                $address="";
                $city="";
                $gender="";
                $password="";
                $cpass="";
                
               }
               else
               {
                echo '<script> alert("please try again")</script>';
               } 
            }
         else {
             echo '<script>alert("OOPS!!! Email already exsists") </script>'; }
        
    }
    else
    {
        echo '<script> alert("Password not matched try again") </script>';
    }

 }
?>
<body>
    <div class="container mt-5">
        <div class="row p-5">
            <div class="offset-sm-4 col-sm-4">
                <h4>HMS | PATIENT Registration </h4>
                <p class="text-primary">
                    Sign Up
                </p>
                <form action="" class="p-3" method="post" id="form" style="border:1px solid rgb(196, 191, 191)">
                    <p class="small text-secondary">
                        Please Enter Personal details below :
                    </p>
                    <input type="text" class="form-control my-2" name="name" placeholder="Full Name  " >
                    <input type="text" class="form-control my-2" name="username" placeholder="User Name  " required>
                    <input type="text" class="form-control my-2" name="address" placeholder="Address  " required>
                    <input type="text" class="form-control my-2" name="city" placeholder="City " required>
                    <label for="gender" class=" my-2">Gender</label>
                    <input type="radio" name="gender" class="mx-2" value="femlae">Female
                    <input type="radio" name="gender" class="mx-2" value="male">Male
                    <p class="small text-secondary">
                        Enter Your account details below
                    </p>
                    <input type="email" class="form-control  my-2" name="email" placeholder="Email" required>
                    <input type="password" class="form-control  my-2" name="password" placeholder="Password" required>
                    <input type="password" class="form-control  my-2" name="cpassword" placeholder=" Password Again"
                        required>
                    <span class="small text-secondary">Already have an account? </span><span><a href="user-login.php"
                            class="text-decoration-none small">Log-in</a></span>
                    <br>
                    <div class="text-end my-2">
                        <button type="submit" class="btn btn-primary text-white" name="submit">Submit</button>
                    </div>
                </form>
                <br>
                <p class="small text-center">© 2022 HMS. All rights reserved</p>
            </div>
        </div>


    <script>
 $('document').ready(function(){
  $("#form").validate({
    rules :
    {
      name : "required ",
      username : "required ",   
      address : "required ",   
      city : "required ",
      gender : { required : true },
      emial : "required ",
      password :
      {
        required :true,
        minlenght:8
      }
      cpassword :
      {
        required :true,
        value= name['password'],
      }

    },
    messages :
    {
     name : "Please Enter Your Name ",
     username : "Please Enter Your UserName ",
     address : "Please Enter Your address ",
     city   : "Please Enter Your address ",
    },
    submitHandler : function(form){
        form.submit();
    }
  });
 });
</script>
</body>