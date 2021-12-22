<?php
session_start();
require "../../config/connection.php";

 $report_id = $_GET['report_id'];  
      
 //to prevent from mysqli injection  
 $report_id = stripcslashes($report_id);  
 $report_id = mysqli_real_escape_string($con, $report_id);   
      
 $sql = "SELECT patientName, patientEmail, patientContact, patientAge, patientGender, checkupDate, results, otherIssues, feedback, patientPDFReport, cnic FROM reports WHERE id='$report_id'";
 $result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $patientName = $row["patientName"];    
    $patientEmail = $row["patientEmail"];    
    $patientContact = $row["patientContact"];    
    $patientAge = $row["patientAge"];    
    $patientGender = $row["patientGender"];    
    $checkupDate = $row["checkupDate"];    
    $results = $row["results"];    
    $otherIssues = $row["otherIssues"];    
    $feedback = $row["feedback"];    
    $reportPDF = $row["patientPDFReport"];    
    $cnic = $row["cnic"];    
  }
} else {
  $reportPDF = 0;
}

$recordAdded = false;

if(isset($_POST["submit"])){

  $UpdatedName = $_POST['UpdatedName'];  
  $UpdatedEmail = $_POST['UpdatedEmail'];  
  $UpdatedPhone = $_POST['UpdatedPhone'];  
  $UpdatedCNIC = $_POST['UpdatedCNIC'];  
  $UpdatedAge = $_POST['UpdatedAge'];  
  $UpdatedIssues = $_POST['UpdatedIssues'];  
  $Updatedradio = $_POST['Updatedradio'];  
      
  $sql = "UPDATE reports SET patientName='$UpdatedName', patientEmail='$UpdatedEmail', patientContact='$UpdatedPhone', patientAge='$UpdatedAge' , cnic='$UpdatedCNIC', otherIssues='$UpdatedIssues', patientGender='$Updatedradio'  WHERE id=$report_id";

  if (mysqli_query($con, $sql)) {
    header("location: ./update-report.php?report_id=$report_id");
  } else {
    $recordAdded = false;
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
    <title><?php echo $patientName?> - RetinApp</title>
    <link rel="shortcut icon" type="image/jpg" href="../../logo/Logo.png" />

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
    <link href="../../font-awesome/css/all.css" rel="stylesheet" />

    <!-- >>> Bootstrap v5.0.2 | Front End Framework <<< -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- >>> Custom CSS <<< -->
    <link rel="stylesheet" href="../../sass/dashboard/app.css" />
    <link rel="stylesheet" href="../../sass/dashboard/reports/reports-view.css" />

    <style>
      @media (min-width: 768px) {
        .responsive-table__row {
          grid-template-columns: 2fr 5fr 3fr 4fr 2fr 5fr 1fr 1fr;
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
            <a href="../../index.php"><img src="../../logo/logo.svg" alt="logo" /></a>
          </div>
          <div class="list-group rounded-0">
            <a href="../index.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
              <span class="bi bi-border-all"></span>
              <span class="ml-2">Dashboard</span>
            </a>
            <a href="../reports.php" class="list-group-item active list-group-item-action border-0 align-items-center">
              <span class="fa fa-file"></span>
              <span class="ml-2">Reports View</span>
            </a>
            <button
              class="list-group-item list-group-item-action  border-0 d-flex justify-content-between align-items-center"
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
              <div class="list-group active">
                <a href="../doctors.php" class="list-group-item list-group-item-action border-0 pl-5">See All Doctors</a>
                <a href="../add-new-doctor.php" class="list-group-item list-group-item-action border-0 pl-5">Add New Doctor</a>
              </div>
            </div>
            <button
              class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
              data-toggle="collapse"
              data-target="#purchase-collapse"
            >
              <div>
                <span class="bi bi-person-check"></span>
                <span class="ml-2">Volunteer</span>
              </div>
              <span class="bi bi-chevron-down small"></span>
            </button>
            <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
              <div class="list-group">
                <a href="../volunteer.php" class="list-group-item sub list-group-item-action border-0 pl-5">See All Volunteers</a>
              </div>
            </div>
          </div>
        </div>
        <!-- overlay to close sidebar on small screens -->
        <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
        <!-- note: in the layout margin auto is the key as sidebar is fixed -->
        <div class="col-md-9 col-lg-10 ml-md-auto px-0">
          <!-- top nav -->
          <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
            <!-- close sidebar -->
            <button class="btn py-0 d-lg-none" id="open-sidebar">
              <span class="bi bi-list h3" style="color: #ef4126"></span>
            </button>
            <div class="dropdown ml-auto">
              <a href="../../index.php" style="color:unset"><i class="fas fa-sign-out-alt" style="color:#ef4126"></i> &nbsp;Logout</a>
            </div>
          </nav>
          <!-- main content -->
          <main class="container-fluid">
            <section class="row">
              <div class="col-md-6 col-lg-4">
                <!-- card -->
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-4">
                  <a href="../reports.php" class="d-flex align-items-center" style="text-decoration: none">
                    &nbsp; <span class="fa fa-file h4" style="color: #ef4126"></span>&nbsp;&nbsp;
                    <h5 class="ml-2" style="color: #2f2e41; font-family: 'Poppins'; font-size: 17px; text-decoration: none">Reports View</h5>
                  </a>
                </article>
              </div>
              <div class="col-md-6 col-lg-4">
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-4">
                  <a href="../doctors.php" class="d-flex align-items-center" style="text-decoration: none">
                    &nbsp;<span class="bi bi-person h4" style="color: #ef4126"></span>&nbsp;&nbsp;
                    <h5 class="ml-2" style="color: #2f2e41; font-family: 'Poppins'; font-size: 17px">Doctors</h5>
                  </a>
                </article>
              </div>
              <div class="col-md-6 col-lg-4">
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-8">
                  <a href="../volunteer.php" class="d-flex align-items-center" style="text-decoration: none">
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
                <h1>RETIN<span style="color: #ef4126">APP Patients </span></h1>
                <p class="lead" style="font-family: 'Poppins'; color: #2f2e41; font-size: 17px">All the stats will be viewed here.</p>
              </div>
            </div>
          </main>

          <div class="container add-new">
            <form action="" method="post">
              <div class="search__container">
                <!-- Adding Dropdown and Back option -->
              <div class="--select-or-go-back-- container">
                <div class="--select-city--"></div>
                <div class="--go-back--">
                  <a href="../reports.php"><i class="fas fa-chevron-left" style="color: #ef4126;"></i> &nbsp; Back</a>
                  <br><br>
                </div>
              </div>
                <p class="search__title"><span>Go ahead,</span> Update the Reports Details</p>
                <br>
              </div>
                <div class="the-input">
                  <input class="search__input" type="text" value="<?php echo $patientName ?>" placeholder="Name" name="UpdatedName" autofocus/>
                  <i class="fas fa-user"></i>
                </div>
                <div class="the-input">
                  <input class="search__input" type="text" value="<?php echo $patientEmail ?>" placeholder="Email" name="UpdatedEmail"/>
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="the-input">
                  <input class="search__input" type="text" value="<?php echo $patientContact ?>" placeholder="Phone #" name="UpdatedPhone"/>
                  <i class="fas fa-key"></i>
                </div>
                <div class="the-input">
                  <input class="search__input" type="text" value="<?php echo $cnic ?>" placeholder="CNIC #" name="UpdatedCNIC"/>
                  <i class="fas fa-user-nurse"></i>
                </div>
                <div class="the-input">
                  <input class="search__input" type="text" value="<?php echo $patientAge ?>" placeholder="Age" name="UpdatedAge"/>
                  <i class="fas fa-phone"></i>
                </div>
                <div class="the-input">
                  <input class="search__input" type="text" value="<?php echo $otherIssues ?>" placeholder="Other Issues" name="UpdatedIssues"/>
                  <i class="fas fa-user-nurse"></i>
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="radio">
                    <?php if($patientGender === "Male"){ ?>
                      <input id="radio-1" name="Updatedradio" type="radio" value="Male" checked />
                    <?php } else { ?>
                        <input id="radio-1" name="Updatedradio" type="radio" value="Male" />
                    <?php } ?>  
                      <label for="radio-1" class="radio-label">Male</label>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="radio">
                    <?php if($patientGender === "Female"){ ?>
                      <input id="radio-2" name="Updatedradio" type="radio" value="Female" checked />
                    <?php } else { ?>
                        <input id="radio-2" name="Updatedradio" type="radio" value="Female" />
                    <?php } ?>  
                      <label for="radio-2" class="radio-label">Female</label>
                    </div>
                  </div>
                </div>
                <br>
                <input class="add-it" name="submit" type="submit" value="Update Reports" style="margin: 0 0 20px 0px;" />
                <p id="recordAddedMessage" style="margin-bottom: 60px; color:green;"></p>
              </div>

              <div class="credits__container">
                <p class="credits__text">
                  ©RetinApp, 2021 All Rights Reserved.
                  <a href="#" class="credits__link">Azaz Muzaffar</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <script src="../../js/dashboard.js"></script>

    <?php

    if($recordAdded){
    echo 
    '<script type="text/JavaScript"> 
        document.getElementById("recordAddedMessage").innerHTML = "The record has been updated!";
    </script>';
    }

    ?>
  </body>
</html>
