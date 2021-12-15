<?php
session_start();
require "../../config/connection.php";

 $report_id = $_GET['report_id'];  
      
 //to prevent from mysqli injection  
 $report_id = stripcslashes($report_id);  
 $report_id = mysqli_real_escape_string($con, $report_id);   
      
 $sql = "SELECT patientPDFReport, feedback, patientName FROM reports WHERE id='$report_id'";
 $result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $reportPDF = $row["patientPDFReport"];
    $doctorFeedback = $row["feedback"];  
    $patientName = $row["patientName"];    
  }
} else {
  $reportPDF = 0;
}
$con->close();

$recordAdded = false;

if(isset($_POST["submit"])){

require "../../config/connection.php";


  $comment = $_POST['comment'];  
      
  //to prevent from mysqli injection  
  $comment = stripcslashes($comment);  
  $comment = mysqli_real_escape_string($con, $comment);   

  $sql = "UPDATE reports SET feedback='$comment' WHERE id=$report_id";



  if (mysqli_query($con, $sql)) {
    $recordAdded = true;
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
    <title><?php echo $patientName ?> - RetinApp</title>
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
    <link rel="stylesheet" href="../../sass/dashboard/reports/each-report.css" />
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
            <a href="../index.php"><img src="../../logo/logo.svg" alt="logo" /></a>
          </div>
          <div class="list-group rounded-0">
            <a href="../index.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
              <span class="bi bi-border-all"></span>
              <span class="ml-2">Dashboard</span>
            </a>
            <a href="../reports.php" class="list-group-item list-group-item-action active border-0 align-items-center">
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
              <div class="list-group active">
                <a href="./doctors.php" class="list-group-item list-group-item-action border-0 pl-5">See All Doctors</a>
                <a href="add-new-doctor.php" class="list-group-item list-group-item-action border-0 pl-5">Add New Doctor</a>
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
                <a href="#" class="list-group-item sub list-group-item-action border-0 pl-5">See All Volunteers</a>
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
                  <a href="#" class="d-flex align-items-center" style="text-decoration: none">
                    &nbsp;<span class="bi bi-person h4" style="color: #ef4126"></span>&nbsp;&nbsp;
                    <h5 class="ml-2" style="color: #2f2e41; font-family: 'Poppins'; font-size: 17px">Doctors</h5>
                  </a>
                </article>
              </div>
              <div class="col-md-6 col-lg-4">
                <article class="p-3 pl-4 rounded shadow-sm border-left mb-8">
                  <a href="#" class="d-flex align-items-center" style="text-decoration: none">
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
                <h1>RETIN<span style="color: #ef4126">APP Doctor </span></h1>
                <p class="lead" style="font-family: 'Poppins'; color: #2f2e41; font-size: 17px">All the stats will be viewed here.</p>
              </div>
            </div>
          </main>
          <!-- Reports View -->
          <div class="container reports__view">
            <!-- Adding Search Option -->
            <form action="./reports-preview.php" method="post">
              <div class="search__container">
                <p class="search__title"><span>Go ahead,</span> Search Report by Name</p>
                <div class="search__theReport">
                  <input class="search__input" name="report_id" type="text" placeholder="Search Report by Name" />
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

            <!-- Patient Details -->
            <div class="--patient--">
              <!-- Adding Dropdown and Back option -->
              <div class="--select-or-go-back-- container">
                <div class="--select-city--"></div>
                <div class="--go-back--">
                  <a href="../reports.php"><i class="fas fa-chevron-left"></i> &nbsp; Back</a>
                </div>
              </div>
              <embed style="margin-top:30px;height:800px;" width="100%" height="100%" name="plugin" id="pdf" src="../../PDFReports/<?php echo $reportPDF; ?>" type="application/pdf">
              <br><br><br>
              <p><b>Doctor Feedback:</b></p>
              <?php if($doctorFeedback === ""){ ?>
                <p style="color: red;">The Feedback has not provided yet!</p>
              <?php } else { ?>
                <p><?php echo $doctorFeedback ?></p>
              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="../../js/dashboard.js"></script>
  </body>
</html>
