<?php

global $conn;
$select_allvehicles_query = "SELECT * FROM `vehicles`";
$vehicle_result = mysqli_query($conn, $select_allvehicles_query);
$count = mysqli_num_rows($vehicle_result);

?>

<div class="">
   <h2 class="" >All Vehicles in LINE360</h2>
   <h5>Total vehicles : <?php echo $count; ?></h5><br>
   <a href="index.php?add-vehicle"><h4><i class="fa-solid fa-truck-medical"></i>&nbsp;Add New Vehicle +</h4></a>
   <div class="row">
      <div class="col-3">
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
      </div>
      <div class="col-1">
         <button type="submit" class="btn btn-primary mb-3">Search</button>

      </div>
      <div class="col-2">
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="col-2">
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="col-2">
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>
      <div class="col-2">
         <button type="submit" class="btn btn-primary mb-3">Filter</button>

      </div>
      
   </div>
   <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Vehicle No</th>
          <th scope="col">Image</th>
          <th scope="col">Vehicle Type</th>
          <th scope="col">Owner</th>
          <th scope="col">Mobile Number</th>
    
        </tr>
      </thead>
      <tbody>

      <?php
      while($vehicle_row=mysqli_fetch_assoc($vehicle_result)){
         $vehicle_id =$vehicle_row["vehicle_id"];
         $vehicle_num=$vehicle_row["vehicle_num"];
         $image=$vehicle_row["image"];
         $vehicle_type=$vehicle_row["vehicle_type"];
         $owner=$vehicle_row["owner"];
         $mobile_no=$vehicle_row["mobile_no"];

         if($image==''){
            $vehicle_image="sampleimg.jpg";
         }else{
            $vehicle_image=$image ;
         }

         echo "
            <tr>
          <th scope='row'><a href='index.php?Vehicle-profile=$vehicle_id&details'>$vehicle_num</a></th>
          <td><a href='index.php?Vehicle-profile=$vehicle_id&details'><img style='height: 60px;' src='./assest/img/$vehicle_image' alt='$vehicle_num'></a></td>
          <td> <a href='index.php?Vehicle-profile=$vehicle_id&details'>$vehicle_type</a></td>
          <td> <a href='index.php?Vehicle-profile=$vehicle_id&details'>$owner</a></td>
          <td><a href='index.php?Vehicle-profile=$vehicle_id&details'> $mobile_no</a></td>
  
        </tr>
         ";

      }
      ?>
   

   </a>
     
        
        
      </tbody>
    </table>
</div>