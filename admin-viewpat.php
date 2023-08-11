<?php
include "Pheader.php";
?>
<body>
    <?php include "admin-nav.php"; ?>
    <body>
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
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient contct number</th>
      <th scope="col">Patient Gender</th>
      <th scope="col">Creation date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
       <?php
                     
              $i=1;
              $sql="SELECT * FROM `patient_table` ";
              $query=mysqli_query($con,$sql);
                if(mysqli_num_rows($query)>0){
               while($row=mysqli_fetch_array($query)){
                    ?>
    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['creation_date']; ?></td>
                        <td>
                        <a href="doc-viewpatient.php?id=<?php echo $row['uid']; ?>"><button class="btn btn-outline-secondary">View</button></a></td>
                    </tr>
                    <?php
                    $i++;
                      }
                        }
                    ?>
  </tbody>
</table>
        </div>
    </body>
</body>