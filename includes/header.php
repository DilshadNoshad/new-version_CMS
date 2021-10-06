<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>D Blog | Stay uptodate</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome CSS-->
    <link
      rel="stylesheet"
      href="vendor/font-awesome/css/font-awesome.min.css"
    />
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css" />
    <!-- Google fonts - Open Sans-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"
    />
    <!-- Fancybox-->
    <link
      rel="stylesheet"
      href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css"
    />
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
  </head>
  <style>
    .Heart:hover {
      fill: #ff0000;
      transition: 0.3s;
      animation: shake 0.82s;
      cursor: pointer;
    }
    @keyframes shake {
      10%,
      90% {
        transform: translate3d(-1px, 0, 0);
      }

      20%,
      80% {
        transform: translate3d(2px, 0, 0);
      }

      30%,
      50%,
      70% {
        transform: translate3d(-4px, 0, 0);
      }

      40%,
      60% {
        transform: translate3d(4px, 0, 0);
      }
    }
  </style>
  <body>
<header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div
            class="
              search-area-inner
              d-flex
              align-items-center
              justify-content-center
            "
          >
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input
                      type="search"
                      name="search"
                      id="search"
                      placeholder="What are you looking for?"
                    />
                    <button type="submit" class="submit">
                      <i class="icon-search-1"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div
            class="
              navbar-header
              d-flex
              align-items-center
              justify-content-between
            "
          >
            <!-- Navbar Brand --><a href="index.html" class="navbar-brand"
              >D Blog</a
            >
            <!-- Toggle Button-->
            <button
              type="button"
              data-toggle="collapse"
              data-target="#navbarcollapse"
              aria-controls="navbarcollapse"
              aria-expanded="false"
              aria-label="Toggle navigation"
              class="navbar-toggler"
            >
              <span></span><span></span><span></span>
            </button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <?php
              $query = 'SELECT * FROM categories';
              $select_all_categories_query = mysqli_query($connection, $query);

              while($row = mysqli_fetch_assoc($select_all_categories_query)){
                $cat_title = $row['cat_title'];

                echo "<li class='nav-item'>
                <a href='#' class='nav-link'>{$cat_title}</a>
              </li>";
              }
              ?>
              <!-- <li class="nav-item">
                <a href="index.php" class="nav-link active">Home</a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="blog.php" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="post.php" class="nav-link">Post</a>
              </li>
              <li class="nav-item">
                <a href="login.html" class="nav-link">Admin Area</a>
              </li> -->
            </ul>
            <div class="navbar-text">
              <a href="#" class="search-btn"><i class="icon-search-1"></i></a>
            </div>
          </div>
        </div>
      </nav>
    </header>