<?php
$service_data_query = "SELECT * FROM `services` WHERE vehicle_id = $vehicle_id ORDER BY service_id DESC ";
$service_data_result = mysqli_query($conn,$service_data_query);

$service_count = mysqli_num_rows($service_data_result);

if($service_count<1){
    echo '<br><br><br> <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Sorry No Any service Records !!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}else{


while($service_data_row=mysqli_fetch_assoc($service_data_result)){
            $mileage = $service_data_row['mileage'];
            $date = $service_data_row['date'];
            $oil = $service_data_row['oil'];
            $coolant = $service_data_row['coolant'];
            $transmission = $service_data_row['transmission'];
            $plug = $service_data_row['plug'];
            $service1 = $service_data_row['service1'];
            $service2 = $service_data_row['service2'];
            $service3 = $service_data_row['service3'];
            $service4 = $service_data_row['service4'];
            $service5 = $service_data_row['service5'];
            $service6 = $service_data_row['service6'];
            $cost = $service_data_row['cost'];
            $next = $service_data_row['next'];

            if($oil == 'Changed'){
                $oil_status = "<span class='badge text-bg-success'>Changed</span>";
             
              }
              else if($oil == "Not Changed"){
                $oil_status = "<span class='badge text-bg-danger'>Not Changed</span>";
              }
              else {
                $oil_status = "<span class='badge text-bg-warning'>Other</span>";

              }
            
            if($coolant == 'Changed'){
                $coolant_status = "<span class='badge text-bg-success'>Changed</span>";
             
              }
              else if($coolant == "Not Changed"){
                $coolant_status = "<span class='badge text-bg-danger'>Not Changed</span>";
              }
              else{
                $coolant_status = "<span class='badge text-bg-warning'>Other</span>";

              }
            
            if($transmission == 'Changed'){
                $transmission_status = "<span class='badge text-bg-success'>Changed</span>";
             
              }
              else if($transmission == "Not Changed"){
                $transmission_status = "<span class='badge text-bg-danger'>Not Changed</span>";
              }
              else{
                $transmission_status = "<span class='badge text-bg-warning'>Other</span>";

              }
            
            if($plug == 'Changed'){
                $plug_status = "<span class='badge text-bg-success'>Changed</span>";
             
              }
              else if($plug == "Not Changed"){
                $plug_status = "<span class='badge text-bg-danger'>Not Changed</span>";
              }
              else {
                $plug_status = "<span class='badge text-bg-warning'>Other</span>";

              }
            


            echo "
            <div class=' shadow p-3 m-2 row   rounded'>
                           <h4>Vehicle mileage : $mileage KM </h4>
                           <h5>Date : $date </h5>
                           <div class='col'>
                             <p> Oil & Oil Filter  </p>
                             <h6 class='user-details'>$oil_status</h6>
                             <p> Coolant & Air Filter</p>
                             <h6 class='user-details'>$coolant_status</h6>
                             <p> Transmission Oil</p>
                             <h6 class='user-details'>$transmission_status</h6>
                             <p> Spark Plugs</p>
                             <h6 class='user-details'>$plug_status</h6>
                            
                        
                           </div>
                           <div class='col'>
                             <p>Other Service :</p>
                             <h6 class='user-details'>$service1</h6>
                             <p>Other Service :</p>
                             <h6 class='user-details'>$service2</h6>
                             <p>Other Service :</p>
                             <h6 class='user-details'>$service3</h6>
                             <p>Other Service :</p>
                             <h6 class='user-details'>$service4</h6>
                           
                             
                           </div>
                           <div class='col'>
                             <p>Other Service :</p>
                             <h6 class='user-details'>$service5</h6>
                             <p>Other Service :</p>
                             <h6 class='user-details'>$service6</h6>
                             <p>Total Cost :</p>
                             <h6 class='user-details'>RS. $cost</h6>
                             <p class=''>Next Service :</p>
                             <h6 class='user-details'>$next KM</h6>
                          
                           </div>
                           

                       </div>
            ";
}
}



?>

