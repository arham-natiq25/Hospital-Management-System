<?php
 include "confile.php";
 include "Pheader.php";

 if(isset($_GET['id'])){
 $id=$_GET['id'];
 $sql="UPDATE `doctor_reg` SET `authorization`='1' WHERE `id`=$id";
 $query=mysqli_query($con,$sql);
 header("location:admin-authDoc.php");
 }

 ?>
<body>
    <?php include "admin-nav.php";?>
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-12 mt-2">
                <div class="top" style=" border-bottom: 1px solid #eee;padding: 50px 0;position: relative;">
                    <h3>Admin | Status Doctor  </h3> <span class="small float-end">Admin / Dashboard</span>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        

                    <?php
                           $i=1;
                           $sql="SELECT * FROM `doctor_reg` WHERE authorization=0";
                           $query=mysqli_query($con,$sql);
                           if(mysqli_num_rows($query)>0){
                            while($row=mysqli_fetch_array($query)){  ?>
                        <tr>    
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['specilization']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['creatation_date']; ?></td>
                        <td><a href="admin-authDoc.php?id=<?php echo $row['id']; ?>"><button class="btn btn-outline-success" >Click to Authorized</button></a></td>
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