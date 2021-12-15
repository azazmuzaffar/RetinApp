<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content=" width=device-width, initial-scale=1" name="viewport" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <!-- >>> Title & Favicon <<< -->
    <title>How It Works - RetinApp </title>
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

    <!-- >>> Slick Slider <<< -->
    <link href="./slick/slick.css" rel="stylesheet" />

    <!-- >>> Fontawsome 5 | Used for icons <<< -->
    <link href="./font-awesome/css/all.css" rel="stylesheet" />

    <!-- >>> Bootstrap v5.0.2 | Front End Framework <<< -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />

    <!-- >>> Custom CSS <<< -->
    <link rel="stylesheet" href="./sass/pages/how-it-works/how-it-works.css" />
  </head>
  <body>
    <!-- >>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>> Konfidencial <<<<<<<<<<<<<<<< -->
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
    <!-- >>>>>>>>>>>>>> Navbar <<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->



    <nav class="navbar navbar-expand">
      <!-- Header Left/Center/Right -->

      <!-- Left -->

      <div class="--navbar--left-- w-40">
        <ul class="navbar-nav mr-auto">
          <!-- Languages Dropdown -->
          <li class="nav-item lang">
            <span class="nav-link">EN &nbsp; <i class="fas fa-chevron-down"></i></span>
            <!-- Languages List -->
            <ul class="--languages-- navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="EN">EN <i class="fas fa-circle"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#EN">UR</a>
              </li>
            </ul>
          </li>

          <!-- Login to Konfidential -->
          <li class="nav-item login">
            <!-- "make-login" is responsible for showing Login POP UP  -->
            <a class="nav-link make-login" href="#">
              <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <path d="M0 0h24v24H0z" />
                  <path d="M12 16c3.704 0 7.037.667 10 2v4H2v-4c2.963-1.333 6.296-2 10-2zm0-14a5 5 0 1 1 0 10 5 5 0 0 1 0-10z" fill="#C9A882" />
                </g>
              </svg>
              &nbsp;Login
            </a>
          </li>
        </ul>
      </div>

      <!-- Center  -->

      <div class="--navbar--center-- mx-auto order-0">
        <!-- Logo -->
        <div class="--logo--">
          <a class="navbar-brand mx-auto" href="./index.php">
            <span>Menu</span>
            <div class="svg-container">
              <img src="./logo/logo.svg" alt="logo" />
            </div>
          </a>
          <!-- Toggle Menus > Search - Menu -->
          <div class="--menu--">
            <!-- Open Search -->
            <div class="--nav--toggle-- open-search">
              <div class="toggle">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                  <g fill="none" fill-rule="evenodd">
                    <path d="M0 0h24v24H0z" />
                    <path
                      class="icon"
                      d="M10.371 3.24a7.139 7.139 0 0 1 7.13 7.131c0 3.932-3.198 7.13-7.13 7.13s-7.13-3.198-7.13-7.13a7.139 7.139 0 0 1 7.13-7.13zm0 15.502a8.33 8.33 0 0 0 5.46-2.034l5.11 5.11a.616.616 0 0 0 .877 0 .62.62 0 0 0 0-.876l-5.11-5.111a8.33 8.33 0 0 0 2.034-5.46c0-4.616-3.756-8.371-8.37-8.371C5.754 2 2 5.755 2 10.371c0 4.615 3.755 8.37 8.371 8.37z"
                    />
                  </g>
                </svg>
              </div>
            </div>
            <!-- Open Menu -->
            <div class="--nav--toggle-- open-menu">
              <div class="toggle">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
        <!-- All Navigations -->
        <ul class="--center--list-- navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./how-it-works.php">How It Works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./FAQ.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./blog.php">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contactos.php">Contact Us</a>
          </li>
        </ul>
        <!-- >>>>>>>> Pages Direction <<<<<<< -->
        <div class="--page-direction--">
          <span><a href="./index.php">Home</a><span>/</span>How It Works</span>
        </div>
      </div>

      <!-- Right  -->

      <div class="--navbar--right-- navbar-collapse collapse w-40">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <h6>Search Report By ID</h6>
            <!-- Form Start -->
            <form action="search-report.php" method="post">
              <input type="text" placeholder="Enter your CNIC #" name="cnic" required />
              <button>
                <div class="--search--">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                      <path d="M0 0h24v24H0z" />
                      <path
                        class="icon"
                        d="M10.371 3.24a7.139 7.139 0 0 1 7.13 7.131c0 3.932-3.198 7.13-7.13 7.13s-7.13-3.198-7.13-7.13a7.139 7.139 0 0 1 7.13-7.13zm0 15.502a8.33 8.33 0 0 0 5.46-2.034l5.11 5.11a.616.616 0 0 0 .877 0 .62.62 0 0 0 0-.876l-5.11-5.111a8.33 8.33 0 0 0 2.034-5.46c0-4.616-3.756-8.371-8.37-8.371C5.754 2 2 5.755 2 10.371c0 4.615 3.755 8.37 8.371 8.37z"
                      />
                    </g>
                  </svg>
                </div>
              </button>
            </form>
            <!-- Form End-->
          </li>
        </ul>
        <!-- Close End-->
        <div class="--close-search-- close-search">
          <div class="--nav--toggle--">
            <div class="toggle">
              <svg
                version="1.1"
                id="Capa_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                width="94.926px"
                height="94.926px"
                viewBox="0 0 94.926 94.926"
                style="enable-background: new 0 0 94.926 94.926"
                xml:space="preserve"
              >
                <g>
                  <path
                    d="M55.931,47.463L94.306,9.09c0.826-0.827,0.826-2.167,0-2.994L88.833,0.62C88.436,0.224,87.896,0,87.335,0
               c-0.562,0-1.101,0.224-1.498,0.62L47.463,38.994L9.089,0.62c-0.795-0.795-2.202-0.794-2.995,0L0.622,6.096
               c-0.827,0.827-0.827,2.167,0,2.994l38.374,38.373L0.622,85.836c-0.827,0.827-0.827,2.167,0,2.994l5.473,5.476
               c0.397,0.396,0.936,0.62,1.498,0.62s1.1-0.224,1.497-0.62l38.374-38.374l38.374,38.374c0.397,0.396,0.937,0.62,1.498,0.62
               s1.101-0.224,1.498-0.62l5.473-5.476c0.826-0.827,0.826-2.167,0-2.994L55.931,47.463z"
                  />
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>> Banner <<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->

    <div class="--banner--">
      <div class="--banner-bg--">
        <picture>
          <!-- <source media="(max-width:375px)" srcset="./images/acompanhantes/banner-mob.jpg" /> -->
          <!-- <source media="(max-width:768px)" srcset="./images/acompanhantes/banner-tab.png" /> -->
          <img src="./images/home/banner-bg.svg" alt="banner" />
        </picture>
      </div>
      <div class="--banner-content--">
        <h2>How Retin<span>App</span> Works</h2>
        <p>Please checkout our blogs for more info.</p>
      </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>> How it Works <<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->

    <div class="-how-it-works">
      <div class="container">
        <!-- Main Heading and Back option -->
        <div class="heading-area-">
          <!-- >>>>>>>>> Tagline <<<<<<<< -->
          <p class="--main-p--">Whats The Function</p>
          <!-- >>>>>>>>> Main Heading <<<<<<<< -->
          <h3 class="--main-h--">LET’S SEE HOW IT WORKS</h3>
        </div>
        <div class="step-1-">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <img src="./images/how-it-works/step-1.svg" class="img-fluid" alt="" />
              </div>
              <div class="col-lg-5 my-auto">
                <h2>
                  Open Retin<span>App</span> <br />
                  On your Phone
                </h2>
                <p>
                  RetinApp is a mobile based application which targets the medical needs of the society. RetinApp is a mobile based application which
                  targets the medical needs of the society. RetinApp is a mobile based application which targets the medical needs of the society.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="step-2-">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 my-auto">
                <h2>
                  Login to <span>your</span> <br />
                  Account
                </h2>
                <p>
                  RetinApp is a mobile based application which targets the medical needs of the society. RetinApp is a mobile based application which
                  targets the medical and needs of the society and society.
                </p>
              </div>
              <div class="col-lg-7">
                <img src="./images/how-it-works/step-2.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="step-3-">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <img src="./images/how-it-works/step-3.svg" class="img-fluid" alt="" />
              </div>
              <div class="col-lg-5 my-auto">
                <h2>Run <span>your</span> Test</h2>
                <p>
                  RetinApp is a mobile based application which targets the medical needs of the society. RetinApp is a mobile based application which
                  targets the medical needs of the society. RetinApp is a mobile based.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="step-4-">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 my-auto">
                <h2>
                  Generate <span>your</span> <br />
                  Report
                </h2>
                <p>
                  RetinApp is a mobile based application which targets the medical needs of the society. RetinApp is a mobile based application which
                  targets the medical and needs of the society and society.
                </p>
              </div>
              <div class="col-lg-7">
                <img src="./images/how-it-works/step-4.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>> Footer <<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->

    <footer>
      <div class="container">
        <!-- >>>>>>> Navigations <<<<<< -->
        <div class="--pages--">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a class="active" href="./how-it-works.php">How It Works</a></li>
            <li><a href="./FAQ.php">FAQ</a></li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./contactos.php">Contact Us</a></li>
          </ul>
        </div>
        <!-- >>>>>>>> Copyright <<<<<<< -->
        <div class="--copyright--">
          <p>©RetinApp, 2021 All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>> Login <<<<<<<<<<<<<<< -->
    <!-- >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<< -->

    <div class="pop-up login-to-konfidential">
      <div class="pop-up-contant">
        <div class="inner-content">
          <p>Retin<span>App</span> Login</p>
          <form method="post" action="config/login.php">
            <!-- get Email -->
            <div class="fetch-email">
              <label for="Email">Email</label>
              <input type="Email" placeholder="Email" name="doc_email" required />
            </div>
            <!-- get Password -->
            <div class="fetch-password">
              <label for="password">Password</label>
              <input type="password" placeholder="***********" name="doc_password"  required />
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
            <p class="error" id="errorMessage"></p>
            <!-- Submit info -->
            <div class="form-submission">
              <input type="submit" value="Login" />
            </div>
          </form>
          <!-- Clode Login Pop Up -->
          <div class="--close-login--">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd" opacity=".65">
                <path d="M0 0h24v24H0z" />
                <path
                  class="icon"
                  d="m13.414 12 6.364 6.364-1.414 1.414L12 13.414l-6.364 6.364-1.414-1.414L10.586 12 4.222 5.636l1.414-1.414L12 10.586l6.364-6.364 1.414 1.414z"
                />
              </g>
            </svg>
          </div>
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

    <!-- >>> Slick Slider <<< -->
    <script src="./slick/slick.min.js"></script>

    <!-- >>> CUSTOM JS <<< -->
    <script src="./js/app.js"></script>

    <?php
        if(isset($_GET['invalidInfo']))
        {
            echo 
            '<script type="text/JavaScript"> 
                $(".login-to-konfidential").css("display", "block");
                document.getElementById("errorMessage").innerHTML = "Invalid email or password, please try again!";
            </script>';
        }
    ?>
  </body>
</html>
