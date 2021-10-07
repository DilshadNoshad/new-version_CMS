<?php include("includes/db.php");?>
<!-- Header -->
<?php include("includes/header.php");?>
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
                  <?php
                  $query = 'SELECT * FROM posts';
                  $select_all_posts = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_posts)){
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_author_image = $row['post_author_image'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                ?>
              <!-- post -->
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="post.html"><img src="img/<?php echo $post_image ?>" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last"><?php echo $post_date ?></div>
                    <div class="category"><a href="#">Business</a></div>
                  </div><a href="post.html">
                    <h3 class="h4"><?php echo $post_title ?></h3></a>
                  <p class="text-muted"><?php echo $post_content ?></p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="img/<?php echo $post_author_image ?>" alt="..." class="img-fluid"></div>
                      <div class="title"><span><?php echo $post_author ?></span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </footer>
                </div>
              </div>

         <?php } ?>
            <!-- Pagination -->

            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </main>
        <!-- sidebar -->
        <?php include("includes/sidebar.php");?>
      </div>
    </div>
    <!-- Page Footer-->
    <?php include("includes/footer.php");?>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>