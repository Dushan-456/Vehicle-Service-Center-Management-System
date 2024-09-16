<?php
if(isset(($_POST['add_vehicle']))){
    $vehicle_type=$_POST['vehicle_type'];
    $vehicle_num=$_POST['vehicle_num'];
    $eng_num=$_POST['eng_num'];
    $chassi_num=$_POST['chassi_num'];
    $owner=$_POST['owner'];
    $owner_id=$_POST['owner_id'];
    $address=$_POST['address'];
    $mobile_num=$_POST['mobile_num'];
    $email=$_POST['email'];
    $image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];



    $already_query="SELECT * FROM `vehicles` WHERE vehicle_num ='$vehicle_num'";
    $already_result = mysqli_query($conn,$already_query);
    if(!mysqli_num_rows($already_result) > 0){
      move_uploaded_file($tmp_image,"./assest/img/$image");

      $add_evehicle_query = "INSERT INTO `vehicles` ( `vehicle_num`, `engine_num`, `chassi_num`, `vehicle_type`, `owner`, `owner_id`, `address`, `mobile_no`, `email`, `image`) 
      VALUES ( '$vehicle_num', '$eng_num', '$chassi_num', '$vehicle_type', '$owner', '$owner_id', '$address', '$mobile_num', '$email', '$image');";

      $result= $add_result=mysqli_query($conn,$add_evehicle_query);
      if($result){
        echo "<script>window.location.href = './index.php?add-vehicle&error=noerror';</script>";

      }
    }else{

      echo "<script>window.location.href = './index.php?add-vehicle&error=alreadyin';</script>";

    }


}
?>

<div  class=" homepagee">
                    

   <div class="coveruser">
   </div>
   <div class="row">
      <div class="col-3 me-3">
          <img class="userimg d-inline" src="./assest/img/cropped-WhatsApp-Image-2024-08-03-at-23.05.41_1d614ae9.jpg" alt="">&nbsp;&nbsp;
      </div>
      <div class="col-8">
          <h1 class="mt-4" >LINE 360 Service Center</h1><br>
      <h4 class="dept" >Motor Bike</h4>
      <h5 class="" >Owner- Navodya Dushan</h5>



      </div>
     
      

  </div>
 <?php
 if(isset($_GET['error'])){
    $error= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
         This vehicle alreary registered in system !!!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    $no_error ='<div class="alert alert-success alert-dismissible fade show" role="alert">
         New Vehicle added to the System !!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        if($_GET['error']=='alreadyin'){
          echo "$error";
        }elseif($_GET['error']=='noerror'){
          echo "$no_error";
        }

 }
 
 ?>
  <div>
   <h2 class="text-center">Add New Vehicle</h2>
   <form class="m-5" method="post" enctype="multipart/form-data">
        <legend>Vehicle Details</legend>
        <div class="row">
        
      <div class="row">
         <div class="mb-3 col-5">
            <label for="">Vehicle Type </label>
            <select class="form-select" name="vehicle_type" aria-label="Default select example" required>
               <option selected> - Select  -</option>
               <option value="Motor Cycle">Motor Cycle</option>
               <option value="Car">Car</option>
               <option value="Van">Van</option>
               <option value="Lorry">Lorry</option>
               <option value="Other">Other</option>
              
             </select>
         </div>
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Vehicle Number</label>
            <input type="text" id="disabledTextInput" name="vehicle_num" class="form-control" placeholder="Ex ; CAA-1234" required>
         </div>
      </div>

   
    
     
  
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Engine Number</label>
            <input type="text" id="disabledTextInput" name="eng_num" class="form-control" placeholder="Engine Number" required>
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Chassi Number</label>
            <input type="text" id="disabledTextInput" name="chassi_num" class="form-control" placeholder="Chassi Number" required>

          </div>
        </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Owner Name</label>
            <input type="text" id="disabledTextInput" name="owner" class="form-control" placeholder="Owner Name" required>
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Owner ID</label>
            <input type="text" id="disabledTextInput" name="owner_id" class="form-control" placeholder="Owner ID" required>

          </div>
        </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Address</label>
            <input type="text" id="disabledTextInput" name="address" class="form-control" placeholder="Address" required>
          </div>
          <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Mobile Number</label>
            <input type="text" id="disabledTextInput" name="mobile_num" class="form-control" placeholder="Mobile Number" required>

          </div>
        </div>
      <div class="row">
         <div class="mb-3 col-5">
            <label for="disabledTextInput" class="form-label">Email</label>
            <input type="email" id="disabledTextInput" name="email" class="form-control" placeholder="Ex : line360@gmail.com" required>
          </div>
          <div class="mb-3 col-5">
            <label for="formFile" class="form-label">Vehicle Image</label>
<input class="form-control" type="file"  name="image" id="formFile">

          </div>
        </div>
 
      
 
       <button type="submit" name="add_vehicle" class="btn btn-primary">Add Vehicle</button>


    </form>
</div>



     
      

   </div>