<?php
include "confile.php";
include "Pheader.php";


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
                    <h3>Admin | VIEW PATIENT  </h3> <span class="small float-end">Admin / view Patient</span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6">
              <form action="" method="post">
             <label for="search">Search By Name/Mobile No</label>
            <input type="search" name="search" class="form-control" id="">
            <br>
            <button class="btn btn-outline-primary float-end" name="submit" type="submit">Search</button>
            </form>
        </div>
        </div> 
    </div>
    <br>
    <!-- Here by getting record on search using php from database -->
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
            
            if(isset($_POST['submit'])){
              $val=$_POST['search'];
            
              $sql="SELECT * FROM `patient_table` WHERE name='$val' OR  contact='$val' ";
              $query=mysqli_query($con,$sql);
                 $i=1;
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
                   
                  }
               ?>
  </tbody>
</table>
        </div>
</body>