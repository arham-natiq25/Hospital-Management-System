<?php
 include "confile.php";
 include "Pheader.php";

     $sql="SELECT * FROM `doctor_specialization` ";
     $res=mysqli_query($con,$sql); 
    while($row=mysqli_fetch_assoc($res)){
        if(isset($_GET['id']))
        {
           $id=$_GET['id'];    
           $del="DELETE FROM `doctor_specialization` WHERE `id`=$id";
           $query=mysqli_query($con,$del);
        }
    }   

  if(isset($_POST['submit']))
  {
   $spc=$_POST['specialization'];

   $sql="SELECT * FROM doctor_specialization WHERE 'specilization'='$spc'"; 
   $query=mysqli_query($con,$sql);

   if(!mysqli_num_rows($query)>0){
    $ins="INSERT INTO `doctor_specialization`(`specilization`) VALUES ('$spc')";
    $query=mysqli_query($con,$ins);
    if($query)
    {
        echo '<script>alert("Added Successfull") </script>'; 
        header("location:admin-addDSpl.php");
    
    }else
    {
     echo '<script> alert("please try again")</script>';
    } 
}else
   {
    echo '<script> alert("Specialization Already exsist")</script>';
   }  
}

    
?>

<body>
    <?php include "admin-nav.php"; ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mt-2">
                <div class="top" style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | ADD DOCTOR SPECILIZATION </h3> <span class="small float-end">Admin / Dashboard</span>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6 mt-3">
                <h4 class="mb-3">Doctor Specilization</h4>
                <form action="" method="post" style="border: 1px solid rgb(211, 205, 205); padding: 30px ">
                    <label for="specialization">Doctor Specilization</label>
                    <input type="text" name="specialization" class="form-control">
                    <button class="btn btn-outline-primary mt-2 " type="submit" name="submit" required >Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Specilization</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        $sql="SELECT * FROM `doctor_specialization`";
                        $query=mysqli_query($con,$sql);
                        if(mysqli_num_rows($query)>0){
                        while($row=mysqli_fetch_array($query)){  ?>

                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['specilization'];  ?></td>
                        <td><?php echo $row['creation_date'];  ?></td>
                        <td><a href="adm-editDSpl.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill fs-5"></i></a>
                            <a href="admin-addDSpl.php?id=<?php echo $row['id']; ?>"><i class="bi bi-file-earmark-x fs-5"></i></a></td>
                    </tr>
                    <?php
                            $i++;
                            }
                           }
                        ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
