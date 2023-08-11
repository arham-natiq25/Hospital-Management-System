<?php
 include "confile.php";
 include "Pheader.php";

 ?>
<body>
    <?php include "admin-nav.php";?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mt-2">
                <div class="top" style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | Manage Doctor  </h3> <span class="small float-end">Admin / Dashboard</span>
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
                        <th scope="col">Specilization</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Configuration</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        

                    <?php
                           $i=1;
                           $sql="SELECT * FROM `doctor_reg`";
                           $query=mysqli_query($con,$sql);
                           if(mysqli_num_rows($query)>0){
                            while($row=mysqli_fetch_array($query)){  ?>
                        <tr>    
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['specilization']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['creatation_date']; ?></td>
                        <td><?php 
                          $a=$row['authorization'];
                          if($a==1)
                            echo "Authorized Account";
                            else if($a==0) 
                            echo "Unauthorized Account";
                           ?></td>


                        <td><a href="admin-mandoc.php?id=<?php echo $row['id']; ?>"><button class="btn btn-outline-danger">Delete</button></a>
                        <a href="admin-editDoc.php?id=<?php echo $row['id']; ?>">  <button class="btn btn-outline-primary"> Edit</button></td></a>
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