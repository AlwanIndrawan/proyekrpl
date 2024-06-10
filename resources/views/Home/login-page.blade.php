<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AAARCHINTER</title>
    <link rel="icon" href="img/icons/logokecil.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-color: #fff;
        height: 100vh;
      }

      /*** Navbar ***/
      .navbar .navbar-nav .nav-link {
          margin-right: 30px;
          padding: 30px 0;
          color: var(--dark);
          font-weight: 500;
          text-transform: uppercase;
          outline: none;
      }

      .navbar .navbar-nav .nav-link:hover,
      .navbar .navbar-nav .nav-link.active {
          color: var(--primary);
      }

      .navbar.sticky-top {
          top: -100px;
          transition: .5s;
      }

      @media (max-width: 991.98px) {
          .navbar .navbar-nav .nav-link {
              margin-right: 0;
              padding: 10px 0;
          }

          .navbar .navbar-nav {
              border-top: 1px solid #EEEEEE;
          }
      }

      @media (min-width: 992px) {
          .navbar .nav-item .dropdown-menu {
              display: block;
              visibility: hidden;
              top: 100%;
              transform: rotateX(-75deg);
              transform-origin: 0% 0%;
              transition: .5s;
              opacity: 0;
          }

          .navbar .nav-item:hover .dropdown-menu {
              transform: rotateX(0deg);
              visibility: visible;
              transition: .5s;
              opacity: 1;
          }
      }

    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
      <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
          <img class="me-3" src="img/icons/logo.png" alt="Icon">
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0,0);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded shadow-5-strong p-5">
                <!-- Email input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="email" id="form1Example1" class="form-control" />
                  <label class="form-label" for="form1Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input type="password" id="form1Example2" class="form-control" />
                  <label class="form-label" for="form1Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init>Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->
  
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
</body>
</html>