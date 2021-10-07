<aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
          <div class="widget search">
            <header>
              <h3 class="h6">Search the blog</h3>
            </header>
            <form action="search.php" method="post" class="search-form">
              <div class="form-group">
                <input type="text" name="search" placeholder="What are you looking for?">
                <button type="submit" name="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>


          <?php
          $query = 'SELECT * FROM categories';
          $select_all_categories_query = mysqli_query($connection, $query);
          ?>

          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <?php 
              while($row = mysqli_fetch_assoc($select_all_categories_query)){
                $cat_title = $row['cat_title'];

                echo "<div class='item d-flex justify-content-between'><a href='#'>{$cat_title}</a><span>12</span></div>";
              } ?>
            
            <!-- <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div> -->
          </div>


            <!-- include widget -->
            <?php include 'widget.php' ?>
          
        </aside>