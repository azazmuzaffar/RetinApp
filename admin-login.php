<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content=" width=device-width, initial-scale=1" name="viewport" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <!-- >>> Title & Favicon <<< -->
    <title>Admin Login - RetinApp</title>
    <link rel="shortcut icon" type="image/jpg" href="./logo/Logo.png" />

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
    <link href="./font-awesome/css/all.css" rel="stylesheet" />

    <!-- >>> Bootstrap v5.0.2 | Front End Framework <<< -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />

    <!-- >>> Custom CSS <<< -->
    <link rel="stylesheet" href="./sass/pages/admin-login/login.css" />
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
    <!-- >>>>>>>>>>>>>> Login <<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->

    <div class="pop-up admin-login">
      <div class="pop-up-contant">
        <div class="inner-content">
          <p>Retin<span>App</span> Admin</p>
          <form action="./config/adminLogin.php" method="post">
            <!-- get Email -->
            <div class="fetch-email">
              <label for="Email">Email</label>
              <input type="Email" placeholder="Email" name="adminEmail" required />
            </div>
            <!-- get Password -->
            <div class="fetch-password" style="margin: 0;">
              <label for="password">Password</label>
              <input type="password" placeholder="***********" name="adminPassword" required />
              <!-- Eye icon responsible for showing password -->
              <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <path d="M0 0h24v24H0z" />
                  <path
                    d="M12 6c5.437 0 9.694 5.74 9.873 5.985a.66.66 0 0 1 0 .778c-.179.244-4.436 5.984-9.873 5.984-5.228 0-9.365-5.307-9.835-5.932l-.038-.052a.66.66 0 0 1 0-.779l.038-.052C2.635 11.307 6.772 6 12 6zm0 1.319c-4.014 0-7.475 3.808-8.5 5.054C4.525 13.62 7.994 17.43 12 17.43c4.014 0 7.475-3.808 8.5-5.055-1.027-1.246-4.495-5.055-8.5-5.055zm0 1.099a3.96 3.96 0 0 1 3.956 3.956A3.96 3.96 0 0 1 12 16.33a3.96 3.96 0 0 1-3.956-3.956A3.96 3.96 0 0 1 12 8.418zm0 1.318a2.64 2.64 0 0 0-2.637 2.638A2.64 2.64 0 0 0 12 15.01a2.64 2.64 0 0 0 2.637-2.637A2.64 2.64 0 0 0 12 9.736z"
                    fill="#000"
                  />
                </g>
              </svg>
            </div>
            <p id="errorMessage" style="margin: 10px 0px 20px 0px; font-family: Poppins; font-size:12px; color:red; text-align: left; text-transform: unset;"></p>
            <!-- Submit info -->
            <div class="form-submission">
              <input type="submit" value="Login" />
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>>>> End <<<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<< -->

    <!-- >>> JQUERY <<< -->
    <script src="./jquery/jquery.min.js"></script>

    <!-- >>> Bootstrap v5.0.2 | Front End Framework <<< -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <!-- >>> CUSTOM JS <<< -->
    <script src="./js/app.js"></script>

    <?php
        if(isset($_GET['invalidInfo']))
        {
            echo 
            '<script type="text/JavaScript"> 
                document.getElementById("errorMessage").innerHTML = "Invalid email or password, please try again!";
            </script>';
        }
    ?>
  </body>
</html>
