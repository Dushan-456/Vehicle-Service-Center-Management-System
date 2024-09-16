<?php
global $conn ;
$vehicle_id = $_GET['Vehicle-profile'];

$vehicle_data_query = "SELECT * FROM `vehicles` WHERE vehicle_id  = $vehicle_id ";
$vehicle_data_result = mysqli_query($conn,$vehicle_data_query);
$vehicle_data_row = mysqli_fetch_assoc($vehicle_data_result);

$vehicle_num=$vehicle_data_row["vehicle_num"];
$engine_num=$vehicle_data_row["engine_num"];
$chassi_num=$vehicle_data_row["chassi_num"];
$owner_id=$vehicle_data_row["owner_id"];
$address=$vehicle_data_row["address"];
$image=$vehicle_data_row["image"];
$vehicle_type=$vehicle_data_row["vehicle_type"];
$owner=$vehicle_data_row["owner"];
$email=$vehicle_data_row["email"];
$mobile_no=$vehicle_data_row["mobile_no"];


$next_service_query = "SELECT MAX(next) AS next_service
FROM services
WHERE vehicle_id = $vehicle_id;";
$next_service_result= mysqli_query($conn,$next_service_query);
$next_service_row = mysqli_fetch_assoc($next_service_result);
$next_service_mileage = $next_service_row['next_service'];



?>

<div  class="homepagee">
                    

   <div class="coveruser">
   </div>
   <div class="row">
      <div class="col-3 me-3">
          <img class="userimg d-inline" src="./assest/img/<?php          if($image==''){ echo "sampleimg.jpg";     }else{       echo "$image" ;      } ?>" alt="">&nbsp;&nbsp;
      </div>
      <div class="col-5">
          <h1 class="mt-4" ><?php echo"$vehicle_num"; ?></h1><br>
      <h4 class="dept" >Vehicle Type - <?php echo"$vehicle_type"; ?></h4>
      <h5 class="" >Owner- <?php echo"$owner"; ?></h5>
      <h4 class="text-danger" ><?php if(isset($next_service_mileage)){echo"<i class='fa-solid fa-triangle-exclamation fa-beat ' style='color: #e60f0f;'></i> Next Service - $next_service_mileage"; } ?></h4>



      </div>
      <div class="col mt-5">
        
         <a href="index.php?Vehicle-profile=<?php echo"$vehicle_id"; ?>&details"><button type="button" class="btn btn-warning btn-sm">Vehicle Details</button><br><br></a>
         <a href="index.php?Vehicle-profile=<?php echo"$vehicle_id"; ?>&service-recodes"><button type="button" class="btn btn-success btn-sm"> Service Recordes</button></a>
         <br><br><a href="index.php?Vehicle-profile=<?php echo"$vehicle_id"; ?>&add-service-records"><button type="button" class="btn btn-primary btn-sm">Add Service Recordes</button></a>

      </div>
      

  </div>
    <?php
       if(isset($_GET['details'])){
        include('./details.php');
     }
       if(isset($_GET['service-recodes'])){
        include('./service-recodes.php');
     }
     if(isset($_GET['add-service-records'])){
        include('./add-service-records.php');
     }
    ?>


      
     
      

   </div>