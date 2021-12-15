<?php
session_start();
require "../config/connection.php";

error_reporting(E_ERROR); if($_GET['report_id']){
  $report_id = $_GET['report_id'];  
      
  //to prevent from mysqli injection  
  $report_id = stripcslashes($report_id);  
  $report_id = mysqli_real_escape_string($con, $report_id);   
       
 // sql to delete a record
 $sql = "DELETE FROM volunteers WHERE id='$report_id'";
 
 if ($con->query($sql) === TRUE) {
   header("location: ./volunteer.php");
 } else {
   echo "Error deleting record: " . $con->error;
 }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content=" width=device-width, initial-scale=1" name="viewport" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <!-- >>> Title & Favicon <<< -->
    <title>Volunteers - RetinApp</title>
    <link rel="shortcut icon" type="image/jpg" href="../logo/Logo.png" />

    <!-- >>> meta Description <<< -->
    <meta
      name="description"
      content="RetinApp is a mobile based application which targets the medical needs of the society. 
               This application helps detect the diabetic symptoms and its severity without any need of long and painful blood tests."
    />
    <!-- >>>> meta Keywords <<<< -->
    <meta
      name="keywords"
      content="RetinApp is a mobile based application which targets the medical needs of the society. 
               This application helps detect the diabetic symptoms and its severity without any need of long and painful blood tests."
    />

    <!-- >>> Fontawsome 5 | Used for icons <<< -->
    <link href="../font-awesome/css/all.css" rel="stylesheet" />

    <!-- >>> Bootstrap v5.0.2 | Front End Framework <<< -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- >>> Custom CSS <<< -->
    <link rel="stylesheet" href="../sass/dashboard/app.css" />
    <link rel="stylesheet" href="../sass/dashboard/reports/reports-view.css" />

    <style>
      

      .responsive-table__row{
        grid-template-columns: 1fr 4fr 3fr 3fr 3fr 1fr 2fr 5fr 1fr 1fr ;
          text-overflow: ellipsis;
      }
      @media (min-width: 1900px) {
        .responsive-table__row {
          grid-template-columns: 1fr 200px 230px 3fr 3fr 1fr 2fr 5fr 1fr 1fr ;
          text-overflow: ellipsis;
        }
      }
      @media (min-width: 768px) and (max-width: 991px) {
        .responsive-table__row {
          grid-template-columns: 1fr 1fr 1fr;
        }
      }
    </style>
  </head>
  <body>
    <!-- >>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>> RetinApp <<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<< -->

    <div class="preloader">
      <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>> Dashboard <<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->

    <div class="container-fluid">
      <div class="row">
        <!-- sidebar -->
        <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
          <div class="logo p-5">
            <a href="../index.php"><img src="../logo/logo.svg" alt="logo" /></a>
          </div>
          <div class="list-group rounded-0">
            <a href="./index.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
              <span class="bi bi-border-all"></span>
              <span class="ml-2">Dashboard</span>
            </a>
            <a href="./reports.php" class="list-group-item list-group-item-action border-0 align-items-center">
              <span class="fa fa-file"></span>
              <span class="ml-2">Reports View</span>
            </a>
            <button
              class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
              data-toggle="collapse"
              data-target="#sale-collapse"
            >
              <div>
                <span class="fas fa-user-md"></span>
                <span class="ml-2">Doctors</span>
              </div>
              <span class="bi bi-chevron-down small"></span>
            </button>
            <div class="collapse" id="sale-collapse" data-parent="#sidebar">
              <div class="list-group">
                <a href="./doctors.php" class="list-group-item list-group-item-action border-0 pl-5">See All Doctors</a>
                <a href="./add-new-doctor.php" class="list-group-item list-group-item-action border-0 pl-5">Add New Doctor</a>
              </div>
            </div>
            <button
              class="list-group-item list-group-item-action active border-0 d-flex justify-content-between align-items-center"
              data-toggle="collapse"
              data-target="#purchase-collapse"
            >
              <div>
                <span class="bi bi-person-check"></span>
                <span class="ml-2">Volunteers</span>
              </div>
              <span class="bi bi-chevron-down small"></span>
            </button>
            <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
              <div class="list-group">
                <a href="./volunteer.php" class="list-group-item list-group-item-action border-0 pl-5">See All Volunteers</a>
              </div>
            </div>
          </div>
        </div>
        <!-- overlay to close sidebar on small screens -->
        <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
        <!-- note: in the layout margin auto is the key as sidebar is fixed -->
        <div class="col-md-9 col-lg-10 ml-md-auto px-0 pb-5" >
          <!-- top nav -->
          <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
            <!-- close sidebar -->
            <button class="btn py-0 d-lg-none" id="open-sidebar">
              <span class="bi bi-list h3" style="color: #ef4126"></span>
            </button>
            <div class="dropdown ml-auto">
              <a href="#" style="color:unset"><i class="fas fa-sign-out-alt" style="color:#ef4126"></i> &nbsp;Logout</a>
            </div>
          </nav>
          <!-- main content -->
          <main class="container-fluid">
          <section class="row">
              <div class="col-md-6 col-lg-4">
                <!-- card -->
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-4">
                  <a href="./reports.php" class="d-flex align-items-center" style="text-decoration: none">
                    &nbsp; <span class="fa fa-file h4" style="color: #ef4126"></span>&nbsp;&nbsp;
                    <h5 class="ml-2" style="color: #2f2e41; font-family: 'Poppins'; font-size: 17px; text-decoration: none">Reports View</h5>
                  </a>
                </article>
              </div>
              <div class="col-md-6 col-lg-4">
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-4">
                  <a href="./doctors.php" class="d-flex align-items-center" style="text-decoration: none">
                    &nbsp;<span class="bi bi-person h4" style="color: #ef4126"></span>&nbsp;&nbsp;
                    <h5 class="ml-2" style="color: #2f2e41; font-family: 'Poppins'; font-size: 17px">Doctors</h5>
                  </a>
                </article>
              </div>
              <div class="col-md-6 col-lg-4">
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-8">
                  <a href="./volunteer.php" class="d-flex align-items-center" style="text-decoration: none">
                    &nbsp;
                    <span class="bi bi-person-check h4" style="color: #ef4126"></span>&nbsp;&nbsp;
                    <h5 class="ml-2" style="color: #2f2e41; font-family: 'Poppins'; font-size: 17px">Volunteers</h5>
                  </a>
                </article>
              </div>
            </section>
            <div
              class="jumbotron jumbotron-fluid rounded border-0 shadow-sm border-left px-4"
              style="background: linear-gradient(45deg, #f6faff 50%, #ef4126 50%)"
            >
              <div class="main-heading">
                <h1>RETIN<span style="color: #ef4126">APP Volunteers </span></h1>
                <p class="lead" style="font-family: 'Poppins'; color: #2f2e41; font-size: 17px">All the stats will be viewed here.</p>
              </div>
            </div>
          </main>
          <!-- Reports View -->
          <div class="container reports__view">
            <!-- Adding Search Option -->
            <form action="./volunteer.php" method="post">
              <div class="search__container">
                <p class="search__title"><span>Go ahead,</span> Search Volunteer by Name</p>
                <div class="search__theReport">
                  <input class="search__input" type="text" placeholder="Search" name="patientName" />
                  <button type="submit" name="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
              <div class="credits__container">
                <p class="credits__text">
                  ©RetinApp, 2021 All Rights Reserved.
                  <a href="#" class="credits__link">Azaz Muzaffar</a>
                </p>
              </div>
            </form>

         

            <!-- Adding Dropdown and Back option -->
            <div class="--select-or-go-back-- container">
              <div class="--go-back--">
                <a href="./index.php"><i class="fas fa-chevron-left"></i> &nbsp; Back</a>
              </div>
            </div>



            <!-- Responsive Table Section -->
            <table class="responsive-table">
              <!-- Responsive Table Header Section -->
              <thead class="responsive-table__head">
                <tr class="responsive-table__row">
                  <th class="responsive-table__head__title responsive-table__head__title--status">ID</th>
                  <th class="responsive-table__head__title responsive-table__head__title--name">
                    Name
                    <svg
                      version="1.1"
                      class="up-arrow"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      viewBox="0 0 512 512"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                      fill="white"
                    >
                      <path
                        d="M374.176,110.386l-104-104.504c-0.006-0.006-0.013-0.011-0.019-0.018c-7.818-7.832-20.522-7.807-28.314,0.002c-0.006,0.006-0.013,0.011-0.019,0.018l-104,104.504c-7.791,7.829-7.762,20.493,0.068,28.285    c7.829,7.792,20.492,7.762,28.284-0.067L236,68.442V492c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20V68.442l69.824,70.162c7.792,7.829,20.455,7.859,28.284,0.067C381.939,130.878,381.966,118.214,374.176,110.386z"
                      />
                    </svg>
                  </th>
                
                  <th class="responsive-table__head__title responsive-table__head__title--age">Email</th>
                  <th class="responsive-table__head__title responsive-table__head__title--age">Password</th>
                  <th class="responsive-table__head__title responsive-table__head__title--age">CNIC</th>
                  <th class="responsive-table__head__title responsive-table__head__title--age">Age</th>
                  <th class="responsive-table__head__title responsive-table__head__title--age">Gender</th>
                  <th class="responsive-table__head__title responsive-table__head__title--date">Date Added</th>
                  <th class="responsive-table__head__title responsive-table__head__title--delete">Edit</th>
                  <th class="responsive-table__head__title responsive-table__head__title--delete">Delete</th>
                  
                </tr>
              </thead>
              <!-- Responsive Table Body Section -->
              <tbody class="responsive-table__body">

              <?php

                require "../config/connection.php";
                      
                $sql = "SELECT id, volunteerName, volunteerEmail, volunteerPassword, volunteerAge, volunteerGender, dateAdded, cnic FROM volunteers";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $volunteerName = $row["volunteerName"];    
                    $volunteerEmail = $row["volunteerEmail"];    
                    $volunteerPassword = $row["volunteerPassword"];    
                    $volunteerAge = $row["volunteerAge"];    
                    $volunteerGender = $row["volunteerGender"];    
                    $dateAdded = $row["dateAdded"];     
                    $cnic = $row["cnic"];    

                   ?>

                <?php
                     if(isset($_POST["submit"])){

                     /* ++++++++++++++++++++++++++++  */
                     /* ++++++++++++++++++++++++++++  */
                     /* ++++++++++++++++++++++++++++  */

                     $volunName = $_POST['patientName'];  
      
                     //to prevent from mysqli injection  
                     $volunName = stripcslashes($volunName);  
                     $volunName = mysqli_real_escape_string($con, $volunName);   
                          
                     if($volunName === $volunteerName){
                     ?>

                  <tr class="responsive-table__row">
                  <td class="responsive-table__body__text responsive-table__body__text--id"><?php echo $id ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--name">
                    <img class="user-icon" src="../images/icons/user.svg" alt="RetinApp User" />
                    <?php echo $volunteerName ?>
                  </td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerEmail ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerPassword ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $cnic ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerAge ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerGender ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--date"><?php echo $dateAdded ?></td>
                  <!-- Show edit option if feedback already provided -->
              
                  <td class="responsive-table__body__text responsive-table__body__text--report">
                    <a href="./volunteers/update-volunteer.php?report_id=<?php echo $id ?>" target="_blank"><i class="fas fa-edit"></i> </a>
                  </td>

                  <td class="responsive-table__body__text responsive-table__body__text--report">
                    <a href="./volunteer.php?report_id=<?php echo $id ?>" target="_blank"><i class="fas fa-trash-alt"></i></a>
                  </td>
            
                </tr>
                     
                     <?php
                     }

                     else{
                      ?>

                 

                  <?php
                     }

                     /* ++++++++++++++++++++++++++++  */
                     /* ++++++++++++++++++++++++++++  */
                     /* ++++++++++++++++++++++++++++  */
                    
                 
                      
                ?>



                <?php      
                    }
                    else{
                ?>      

                <tr class="responsive-table__row">
                  <td class="responsive-table__body__text responsive-table__body__text--id"><?php echo $id ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--name">
                    <img class="user-icon" src="../images/icons/user.svg" alt="RetinApp User" />
                    <?php echo $volunteerName ?>
                  </td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerEmail ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerPassword ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $cnic ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerAge ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--age"><?php echo $volunteerGender ?></td>
                  <td class="responsive-table__body__text responsive-table__body__text--date"><?php echo $dateAdded ?></td>
                  <!-- Show edit option if feedback already provided -->
              
                  <td class="responsive-table__body__text responsive-table__body__text--report">
                    <a href="./volunteers/update-volunteer.php?report_id=<?php echo $id ?>" target="_blank"><i class="fas fa-edit"></i> </a>
                  </td>

                  <td class="responsive-table__body__text responsive-table__body__text--report">
                    <a href="./volunteer.php?report_id=<?php echo $id ?>" target="_blank"><i class="fas fa-trash-alt"></i></a>
                  </td>
               
                </tr>
                
                <?php     
                    }
                ?>

                <?php
                  }
                } else {
                  $reportPDF = 0;
                }
                $con->close();
                
                ?>

                
              </tbody>
            </table>
          </div>
          <!-- Pagination -->
          <!-- <div class="container">
            <div class="pagination">
              <ul class="pagination-2">
                <li class="page-number prev"><a href="#">&laquo;</a></li>
                <li class="page-number"><a href="#">1</a></li>
                <li class="page-number active"><a href="#">2</a></li>
                <li class="page-number"><a href="#">3</a></li>
                <li class="page-number"><a href="#">4</a></li>
                <li class="page-number"><a href="#">5</a></li>
                <li class="page-number"><a href="#">6</a></li>
                <li class="page-number"><a href="#">7</a></li>
                <li class="page-number"><a href="#">8</a></li>
                <li class="page-number"><a href="#">9</a></li>
                <li class="page-number"><a href="#">10</a></li>
                <li class="page-number prev"><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <script src="../js/dashboard.js"></script>
  </body>
</html>
