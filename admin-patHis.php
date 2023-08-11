<?php
include "Pheader.php";
?>
<body>
    <?php include "admin-nav.php"; ?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12">
                <div class="top" style="border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3> PATIENT | Appointment History</h3> <span class="small float-end">User / Dashboard</span>
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
      <th scope="col">Doctors Name</th>
      <th scope="col">Specilization</th>
      <th scope="col">Consultant fee</th>
      <th scope="col">Appointment Date/time</th>
      <th scope="col">Appointment Creation Date</th>
      <th scope="col">Current Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
                        $i=1;
                        $sql="SELECT * FROM `appointments`";
                        $query=mysqli_query($con,$sql);
                        if(mysqli_num_rows($query)>0){
                        while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row['uname']; ?></td>
                      <td><?php echo $row['dname']; ?></td>
                      <td><?php echo $row['specilization'] ?></td>
                      <td><?php echo $row['fee']; ?></td>
                      <td><?php echo $row['date']; echo "/"; echo $row['time']; ?></td>
                      <td><?php echo $row['creation_date']; ?></td>
                      <td><?php 
                            if($row['doctor_status']==1 && $row['user_status']==1){
                            echo "Approved By doctor";
                            }
                            else if($row['user_status']=='0'){
                                echo "Cancelled By User ";
                            }
                            else echo "Pending";
                        ?></td>
                        <td><?php if($row['doctor_status']==0 && $row['user_status']==1){ ?>
                          <?php echo "<span class='text-success' >Waiting for Doctor Responce</span> "; ?>
                        <?php
                        } else if($row['doctor_status']==1 && $row['user_status']==1){
                            echo "<span class='text-primary' >Approved By Doctor</span> ";}
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
                    $_SESSION['allApp']=$i;
                ?>
    </tr>
  </tbody>
</table>
        </div>
</body>