<?php
 include "confile.php";
 include "Pheader.php";
//  error_reporting(NULL);
if(isset($_GET['id'])){
     $id=$_GET['id'];
     $sql="UPDATE `appointments` SET `doctor_status`='1'WHERE `id`='$id'";
     $query=mysqli_query($con,$sql);
     header("location:doc-app.php");
 }


?>

<body>
    <?php include "doc-nav.php";
   
    ?>

    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mb-3">
                <div class="top" style="border-bottom: 1px solid #bbb;padding: 50px 0;position: relative;">
                    <h3>Doctors | Appointment History</h3> <span class="small float-end">User / Dashboard</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Specilization</th>
                        <th scope="col">Consultant fee</th>
                        <th scope="col">Appointment Date/time</th>
                        <th scope="col">Appointment Creation Date</th>
                        <th scope="col">Current Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                      <?php
                        $id=$_SESSION['did'];
                        $i=1;
                        $sql="SELECT * FROM `appointments` WHERE did='$id'";
                        $query=mysqli_query($con,$sql);
                        if(mysqli_num_rows($query)>0){
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row['uname']; ?></td>
                      <td><?php echo $row['specilization'] ?></td>
                      <td><?php echo $row['fee']; ?></td>
                      <td><?php echo $row['date']; echo "/"; echo $row['time']; ?></td>
                      <td><?php echo $row['creation_date']; ?></td>
                      <td><?php 
                            if($row['doctor_status']==1 && $row['user_status']==1){
                            echo "Approved";
                            }
                            else if($row['user_status']=='0'){
                                echo "Cancelled By User ";
                            }
                            else echo "Pending";
                        ?></td>
                        <td><?php if($row['doctor_status']==0 && $row['user_status']==1){ ?>
                            <a href="doc-cancelappoint.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-danger" type="submit" >Delete</button></a>
                            <a href="doc-app.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success" type="submit" >Approved</button></a>
                        <?php
                        } else if($row['doctor_status']==1 && $row['user_status']==1){
                            echo "<span class='text-primary' >Approved By You</span> ";}
                           else if($row['user_status']==0){
                            echo "<span class='text-danger'>Cancelled</span>";
                           } 
                        ?>
                         
                        </td
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