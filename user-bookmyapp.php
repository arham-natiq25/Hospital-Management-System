<?php
 include "confile.php";
 include "Pheader.php";
 error_reporting(null);
 if(isset($_POST['submit'])){
    $docName=$_POST['name'];
    $spz=$_POST['spz'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $user=$_SESSION['name'];
    $userid=$_SESSION['uid'];
    $sql="SELECT * FROM `doctor_reg` WHERE `name`='$docName' and `specilization`='$spz' ";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($query)){
    $did=$row['id'];
    $dname=$row['name'];
    $dspc=$row['specilization'];
    $fee=$row['fee'];
    }
    if($docName==$dname && $spz==$dspc){
        $ins="INSERT INTO `appointments`( `dname`, `did`, `uname`, `uid`,`specilization`,`fee`,`date`,`time`)
         VALUES ('$dname','$did','$user','$userid','$dspc','$fee','$date','$time')";
         $query=mysqli_query($con,$ins);
         echo '<script>alert("Appoinment Register")</script>';
         header("location:user-dashboard.php");
    }
    else{
        echo '<script>alert("Doctor Name or Specilaztion INCORRECT or not same")</script>';
    }
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
                    <h3>USER | Book APPOINTMENT </h3> <span class="small float-end"><?php echo $_SESSION['name']; ?> / Dashboard</span>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-8">
            <h3>LIST OF DOCTORS</h3>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Doctors Name</th>
      <th scope="col">Specilization</th>
      <th scope="col">Consultant fee</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $i=1;
      $sql="SELECT * FROM `doctor_reg` WHERE authorization=1 ";
      $query=mysqli_query($con,$sql);
      if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_array($query)){

    ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['specilization']; ?></td>
      <td><?php echo $row['fee']; ?></td>
      
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
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class=" col-8 p-3">
                <form action="" method="post" class="form-group p-5" style="border: 1px solid black">
                  <label for="name">Please Enter Full Doctor Name From Above Mentioned Doctors</label>
                  <input type="text" name="name" class=" form-control my-2" required>
                  <label for="spz">Enter Specilization of Selected Doctor</label>
                  <input type="text" name="spz" class=" form-control my-2" required>

                    <label for="date">Date</label>
                    <input type="date" name="date" class=" form-control my-2" required>
                    <label for="time">Time</label>
                    <input type="time" class="form-control" name="time" required>
                    <button type="submit" class="btn btn-outline-primary mt-2 float-end" name="submit" >Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>