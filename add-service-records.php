<?php
if(isset($_POST['add_record'])){
      $date = $_POST['date'];
      $mileage = $_POST['mileage'];
      $coolant = $_POST['coolant'];
      $oil = $_POST['oil'];
      $transmission = $_POST['transmission'];
      $plug = $_POST['plug'];
      $service1 = $_POST['service1'];
      $service2 = $_POST['service2'];
      $service3 = $_POST['service3'];
      $service4 = $_POST['service4'];
      $service5 = $_POST['service5'];
      $service6 = $_POST['service6'];
      $cost = $_POST['cost'];
      $next = $_POST['next'];


      global $conn;
      $add_record_query ="INSERT INTO `services` ( `vehicle_id`, `mileage`, `date`, `oil`, `coolant`, `transmission`, `plug`, `service1`, `service2`, `service3`, `service4`, `service5`, `service6`, `cost`, `next`) 
                  VALUES ( '$vehicle_id', '$mileage', '$date', '$oil', '$coolant', '$transmission', '$plug', '$service1', '$service2', '$service3', '$service4', '$service5', '$service6', '$cost', '$next');";
      $add_record_result = mysqli_query($conn,$add_record_query);

      if($add_record_result){
         echo "<script>window.location.href = './index.php?Vehicle-profile=$vehicle_id&add-service-records&error=serviceadded';</script>";

      }

}
?>

<div>
   <h2 class="text-center">Add New Service Record </h2>
   <form class="m-5" method="post">
        <legend>Service Details</legend>
        <?php
 if(isset($_GET['error'])){
   

    $no_error ='<div class="alert alert-success alert-dismissible fade show" role="alert">
         New Service Data Added !!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        if($_GET['error']=='serviceadded'){
          echo "$no_error";
        }

 }
 
 ?>
        <div class="row">
         <div class=" mb-3 col-5">
            <label for="">Service Date </label>&nbsp;&nbsp;
            <input type="date" name="date" class="form-control" required>
          </div>
         <div class="  mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Vehicle Mileage</label>
            <input type="text" id="disabledTextInput" name="mileage" required class="form-control" placeholder="Ex : 25,000 " >
          </div>
      </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="">Oil & Oil Filter </label>
            <select class="form-select" aria-label="Default select example" name="oil" required>
               <option selected> - Select  -</option>
               <option value="Changed">Changed</option>
               <option value="Not Changed">Not Changed</option>
               <option value="Other">Other</option>
              
             </select>
         </div>
         <div class="mb-3 col-5">
            <label for="">Coolant & Air Filter</label>
            <select class="form-select" aria-label="Default select example" name="coolant" required>
               <option selected> - Select  -</option>
               <option value="Changed">Changed</option>
               <option value="Not Changed">Not Changed</option>
               <option value="Other">Other</option>
             </select>
         </div>
      </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="">Transmission Oil </label>
            <select class="form-select" aria-label="Default select example" name="transmission" required>
               <option selected> - Select  -</option>
               <option value="Changed">Changed</option>
               <option value="Not Changed">Not Changed</option>
               <option value="Other">Other</option>
              
             </select>
         </div>
         <div class="mb-3 col-5">
            <label for="">Spark Plugs</label>
            <select class="form-select" aria-label="Default select example" required name="plug">
               <option selected> - Select  -</option>
               <option value="Changed">Changed</option>
               <option value="Not Changed">Not Changed</option>
               <option value="Other">Other</option>
             </select>
         </div>
      </div>

   
    
     
  
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Other Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Type Other Service Details" name="service1">
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Other Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Type Other Service Details" name="service2">

          </div>
        </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Other Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Type Other Service Details" name="service3">
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Other Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Type Other Service Details" name="service4" >

          </div>
        </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Other Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Type Other Service Details" name="service5">
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Other Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Type Other Service Details" name="service6">

          </div>
        </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Total Cost</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Ex : 25,000" name="cost" required>
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Next Service</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Ex : 30,000" name="next" required>

          </div>
        </div>
 
      
 
       <button type="submit" name="add_record" class="btn btn-primary">Add Service Record</button>


    </form>
</div>