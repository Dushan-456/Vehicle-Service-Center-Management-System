<?php
session_start();

if(!isset( $_SESSION["user_name"])){
   echo "<script>window.location.href = './login.php';</script>";

}
include("./includes/connect.php");
global $conn ;
$user = $_SESSION["user_name"];


if(isset($_POST['themedrk'])){
   $dark_query = "UPDATE `user` SET `theme` = 'dark' WHERE `user`.`user_name` = '$user'";
   $dark_result = mysqli_query($conn, $dark_query);
   echo "<script>window.location.href = './home.php;</script>";


}
if(isset($_POST['themelight'])){
   $light_query = "UPDATE `user` SET `theme` = 'light' WHERE `user`.`user_name` = '$user'";
   $light_result = mysqli_query($conn, $light_query);
   echo "<script>window.location.href = './home.php;</script>";


}



$select_user_query = "SELECT * FROM `user` WHERE user_name	 = '$user';";
$result = mysqli_query($conn, $select_user_query);
$result_row = mysqli_fetch_assoc($result);
$theme = $result_row["theme"];



if(isset($_POST['search'])){
  
   


}


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Vehicle Management System</title>

      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
         crossorigin="anonymous" />
      <link rel="stylesheet" href="./style.css" />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
         integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
         crossorigin="anonymous"
         referrerpolicy="no-referrer" />
   </head>
   <body data-bs-theme="<?php echo $theme ; ?>">
      <div class="systembody">
         <!------------------------------------ header section ---------------------------------------->

         <div class="container header">
            <header
               class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-3 border-bottom">
               <div class="col-md-4 mb-2 mb-md-0">
                  <a
                  href="./home.php"
                  class="d-inline-flex link-body-emphasis text-decoration-none">
                  <h1 class="pt-3">LINE</h1><img
                  src="./assest/img/360new.png"
                  class="headerlogo"
                     alt="" />
               </a>               </div>

               <ul
                  class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                  <li>
                     <a href="#" class="nav-link px-2">Home</a>
                  </li>
                  <li><a href="#" class="nav-link px-2">Features</a></li>
                  <li><a href="#" class="nav-link px-2">Help</a></li>
                  <li><a href="#" class="nav-link px-2">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2">About</a></li>
               </ul>

               <div class="col-md-4 text-end form-switch">
               <div class="d-inline">
                     <form action="" method="post" >
                     <?php
                     if($theme=='light'){
                        echo "
                                          <button type='submit' name='themedrk' class='btn me-5 btn-dark'>Dark Mode</button>

                        ";
                     }else  if($theme=='dark'){
                        echo "
                                          <button type='submit' name='themelight' class='btn me-5 btn-light'>Light Mode</button>

                        ";
                     }

                     
                     ?>
                     </form>
                     <!-- <h6 class="d-inline me-5">Dark Mode</h6>
                     <input
                        class="form-check-input p-2 me-5 mt-2"
                        type="submit"
                        name="theme"
                        id="darkmodebtn"
                        onclick="darkmode()"
                        role="switch" /> -->
                  </div>

                
               </div>
               <div class="dropdown">
                <a
                   href="#"
                   class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">
                   <strong>Admin</strong>&nbsp;

                   <img
                      src="./assest/img/360.jpg"
                      alt=""
                      width="40"
                      height="40"
                      class="rounded-circle me-2" />
                </a>
                <ul class="dropdown-menu text-small shadow">
                   <li>
                      <a class="dropdown-item" href="index.php?all-vehicles"
                         >All Vehicles</a
                      >
                   </li>
                   <li>
                      <a class="dropdown-item" href="index.php?add-vehicle">Add New Vehicle</a>
                   </li>
                   <li>
                      <a class="dropdown-item" href="#">Profile</a>
                   </li>
                   <li><hr class="dropdown-divider" /></li>
                   <li>
                      <a class="dropdown-item" href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Log out</a>
                   </li>
                </ul>
             </div>
            </header>
         </div>
         <div class="container">
            <div class="row">

              

               <!------------------------------------ Body Content section ---------------------------------------->

               <div class="col-12 content  bg-body-tertiary">
                  <div  class="homepagee">
                    

                     <div class="cover">
                     </div>
                     <div class="row">
                        <div class="col-3 ">
                            <img class="userimg d-inline ms-5" src="./assest/img/cropped-WhatsApp-Image-2024-08-03-at-23.05.41_1d614ae9.jpg" alt="">&nbsp;&nbsp;
                        </div>
                        <div class="col-5">
                            <h1 class="mt-4" >LINE 360 Service Center</h1><br>
                        <h4 class="dept" >Best Service Senter in SriLanka</h4>
                        <h5 class="" >Colombo Branch</h5>
                        </div>
                        <div class="col-4"><br><br>
                           <a href=""><h6><i class="fa-solid fa-envelope"></i>&nbsp;line360@gmail.com</h6></a>
                           <a href=""><h6><i class="fa-solid fa-phone"></i>&nbsp;071 9675669</h6></a>
                           <a href=""><h6><i class="fa-solid fa-phone"></i>&nbsp;076 3148583</h6></a>
                        </div>
                        

                    </div>
                    <div class=" shadow p-3 col-10 m-auto searchcar  d-flex align-items-center flex-column  rounded" style="height: 32vh;" >
                     <h2>Search vehicle</h2>
                     <div class="col">
                        <form
                           class="col-12 d-flex col-lg-auto mb-3 mb-lg-0 me-lg-3"
                           role="search" method="post">
                           <input
                              type="search"
                              class="form-control form-control-dark"
                              placeholder=" Ex : BGS-6585"
                              aria-label="Search" name="search_number" />
                           <button type="submit" name="search" >
                              <i class="fa-solid fa-magnifying-glass"></i>
                           </button>
                        </form>
                     </div><br>
                     <div class="col-9">
                        <?php
                        if(isset($_POST['search'])){
                           $search_num=$_POST['search_number'];
                           $search_query = "SELECT * FROM vehicles
                        WHERE vehicle_num LIKE '%$search_num%';";
                           $search_result = mysqli_query($conn,$search_query);

                        if(!mysqli_num_rows($search_result) > 0){
                           echo "<script>window.location.href = './home.php?error=novehicle';</script>";
                        }else{
                           echo"
                                <h5>Search Results for :  $search_num</h5>

                              <table class='table'>
                           <thead>
                             <tr>
                              <th scope='col'>Image</th>
                               <th scope='col'>Vehicle Number</th>
                               <th scope='col'>Vehicle type</th>
                               <th scope='col'>Owner</th>
                             </tr>
                           </thead>
                           <tbody>
                           ";
                           while($search_row = mysqli_fetch_assoc($search_result)){
                              $vehicle_id = $search_row['vehicle_id'];
                              $vehicle_num = $search_row['vehicle_num'];
                              $vehicle_type = $search_row['vehicle_type'];
                              $image = $search_row['image'];
                              $owner = $search_row['owner'];

                              if($image==''){
                                 $vehicle_image="sampleimg.jpg";
                              }else{
                                 $vehicle_image=$image ;
                              }

                               echo"
                                <tr>
                               <td><a href='index.php?Vehicle-profile=$vehicle_id&details'><img style='height: 50px;' src='./assest/img/$vehicle_image' alt=''></a></td>
                               <td><a href='index.php?Vehicle-profile=$vehicle_id&details'>$vehicle_num</a></td>
                               <td><a href='index.php?Vehicle-profile=$vehicle_id&details'>$vehicle_type</a></td>
                               <td><a href='index.php?Vehicle-profile=$vehicle_id&details'>$owner</a></td>
                             </tr>
                               ";
                           }
                           echo" </tbody>
                         </table>";
                        }}


                        if(isset($_GET['error'])){
   

                           $no_error ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Sorry No Vehicle !!
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                               if($_GET['error']=='novehicle'){
                                 echo "$no_error";
                               }
                       
                        }
                        ?>
                        
                     
                            
                             
                          
                     </div>

                 </div>
                     <div class="row homecon">
                        <div class=" col-2">
                            <a href="index.php?all-vehicles">
                                <div class="btndiv shadow p-3 mb-1  rounded">
                                    <h5>All Vehicles</h5>
                                    <i class="fa-solid icon fa-car-side"></i>                                    
                                </div>
                            </a>
                        </div>
                        <div class=" col-2">
                            <a href="index.php?add-vehicle">
                                <div class="btndiv shadow p-3 mb-1 rounded">
                                    <h5>Add New vehicle</h5>
                                    <i class="fa-solid icon fa-truck-medical"></i>
                                </div>
                            </a>
                        </div>
                        <div class=" col-2">
                            <a href="">
                                <div class="btndiv shadow p-3 mb-1  rounded">
                                   
                                </div>
                            </a>
                        </div>
                        <div class=" col-2">
                            <a href="">
                                <div class="btndiv shadow p-3 mb-1  rounded">
                                   
                                </div>
                            </a>
                        </div>
                        <div class=" col-2">
                            <a href="">
                                <div class="btndiv shadow p-3 mb-1  rounded">
                                 <h5>Settings</h5>
                                 <i class="fa-solid icon fa-truck-medical"></i>
                                                           
                            </div>
                                </div>
                            </a>
                        </div>
                        
                        
                       
                        
        
                     </div>
                     <footer>
                        <small><p class="text-center" >All Rights Reserved © 2024 LINE360 - Developed & Design by Dushan</p></small>
                     </footer>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="./script.js"></script>
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"></script>
   </body>
</html>
