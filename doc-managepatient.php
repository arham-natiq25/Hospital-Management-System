<?php
 include "confile.php";
 include "Pheader.php";
?>
<body>
    <?php
    include "doc-nav.php";
    ?>
      <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mb-3">
                <div class="top" style="border-bottom: 1px solid #bbb;padding: 50px 0;position: relative;">
                    <h3>Doctors | Manage Patient</h3> <span class="small float-end">User / Dashboard</span>
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
                        <th scope="col">Patient contact No</th>
                        <th scope="col">Patient Gender</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $id=$_SESSION['did'];
                       $i=1;
                       $sql="SELECT * FROM `patient_table` WHERE did='$id' ";
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
                        <td><a href="doc-editpatient.php?id=<?php echo $row['uid']; ?>"><button class="btn btn-outline-primary me-2">Edit</button></a>
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
    </div>
</body>