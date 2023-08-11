<?php
 include "confile.php";
 include "Pheader.php"; 

 
   $sql="SELECT * FROM `patient_reg` ";
   $res= mysqli_query($con,$sql);
   while ($row=mysqli_fetch_assoc($res)){
    if(isset($_GET['id'])){
     $id=$_GET['id'];
     $del="DELETE FROM patient_reg WHERE `id`=$id";
     $query=mysqli_query($con,$del);

    }
}

?>
<body>
    <?php 
     include "admin-nav.php";
    ?>

    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mt-2">
                <div class="top" style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | Manage User  </h3> <span class="small float-end">Admin / Dashboard</span>
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
                        <th scope="col">Full name</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php
                           $i=1;
                           $sql="SELECT * FROM `patient_reg`";
                           $query=mysqli_query($con,$sql);
                           if(mysqli_num_rows($query)>0){
                            while($row=mysqli_fetch_array($query)){  ?>
                        <tr>    
                        <th scope="row"><?php echo $i; ?> </th>
                        
                        <td><?php echo $row['name'];  ?></td>
                        <td><?php echo $row['address'];  ?></td>
                        <td><?php echo $row['city'];  ?></td>
                        <td><?php echo $row['gender'];  ?></td>
                        <td><?php echo $row['email'];  ?></td>
                        <td><?php echo $row['creatation_date'];  ?></td>
                        <td><a href="admin-manuser.php?id=<?php echo $row['id']; ?>"><button class="btn btn-outline-danger"  type = "button">Delete</button></td>
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