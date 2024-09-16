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
               <!------------------------------------ Side bar section ---------------------------------------->

               <div class="col-3">
                  <div
                     class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary sidebar"
                     style="width: 280px">
                     <a
                        href=""
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32">
                           <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4">Vehicle System</span>
                     </a>
                     <hr />
                     <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                           <a
                              href="home.php"
                              class="nav-link link-body-emphasis"
                              aria-current="page">
                              <i class="fa-solid fa-house"></i>
                              Home
                           </a>
                        </li>
                        <li>
                           <a href="index.php?all-vehicles" class="nav-link  <?php     if(isset($_GET['all-vehicles'])){echo "active";}else{echo " link-body-emphasis";}  ?>">
                              <i class="fa-solid fa-address-card"></i>
                              All Vehicles
                           </a>
                        </li>
                        <li>
                           <a href="index.php?add-vehicle" class="nav-link <?php     if(isset($_GET['add-vehicle'])){echo "active";}else{echo " link-body-emphasis";}  ?>">
                              <i class="fa-solid fa-calendar-days"></i>
                              Add New vehicle
                           </a>
                        </li>
                        <li>
                           <a href="#" class="nav-link <?php     if(isset($_GET['details'])){echo "active";}else{echo " link-body-emphasis";}  ?>">
                              <i class="fa-solid fa-table"></i>
                              Vehicle Details
                           </a>
                        </li>
                        <li>
                           <a href="#" class="nav-link <?php     if(isset($_GET['service-recodes'])){echo "active";}else{echo " link-body-emphasis";}  ?>">
                              <i class="fa-solid fa-file "></i>
                              Service Records
                           </a>
                        </li>
                        <li>
                           <a href="#" class="nav-link <?php     if(isset($_GET['add-service-records'])){echo "active";}else{echo " link-body-emphasis";}  ?>">
                              <i class="fa-solid fa-user-tag"></i>
                              Add Service Records
                           </a>
                        </li>
                        <br />
                        <h5 class="text-center">Settings</h5>
                        <hr />
                        <li>
                           <a href="#" class="nav-link link-body-emphasis">
                              <i class="fa-solid fa-image"></i>
                              Change Profile Pic
                           </a>
                        </li>
                        <li>
                           <a href="#" class="nav-link link-body-emphasis">
                              <i class="fa-solid fa-user-gear"></i>
                              Change Details
                           </a>
                        </li>
                        <li>
                           <a href="#" class="nav-link link-body-emphasis">
                              <i class="fa-solid fa-gear"></i>
                              Change Password
                           </a>
                        </li>
                     </ul>
                     <hr />
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
                  </div>
               </div>

               <!------------------------------------ Body Content section ---------------------------------------->

               <div class="col-9 myleave content bg-body-tertiary">
                 

               <?php
               
               if(isset($_GET['home'])){
                  include('./home.php');
               }
               if(isset($_GET['all-vehicles'])){
                  include('./all-vehicles.php');
               }
               if(isset($_GET['add-vehicle'])){
                  include('./add-vehicle.php');
               }
               if(isset($_GET['Vehicle-profile'])){
                  include('./Vehicle-profile.php');
               }
          
               
               ?>























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
