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