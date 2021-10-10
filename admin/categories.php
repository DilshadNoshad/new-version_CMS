<?php ob_start(); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>D-Blogging | CMS</title>

    <!-- Bootstrap -->
    <link
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="../vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link
      href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
    />
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link
      href="../vendors/bootstrap-daterangepicker/daterangepicker.css"
      rel="stylesheet"
    />
    <!-- jQuery custom content scroller -->
    <link
      href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"
      rel="stylesheet"
    />
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <!-- Timer Style -->
    <link href="./css/main.time.css" rel="stylesheet" />

    <link rel="shortcut icon" type="image/x-icon" href="./images/site-logo.ico">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- include sidebar -->
        <?php include('includes/sidebar.php') ?>
        <!-- include header -->
        <?php include('includes/header.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  
                  <div class="x_content" style="display: block;">

                   

                    <div class="col-md-6 col-sm-6 col-xs-12">
<?php
if(isset($_POST['submit'])){
     $cat_title = $_POST['cat_title'];

    if($cat_title == "" || empty($cat_title)){
        echo "please insert category Title";
    }
    else{
        $query = "INSERT INTO categories (cat_title) ";
        $query .= "VALUE ('{$cat_title}') ";

        $add_category = mysqli_query($connection, $query);

        if(!$add_category){
            die('Query Failed' . mysqli_error($connection));
        }
    }
}
?>
                    <form class="form-horizontal form-label-left" action="" method="post">
                    <div class="form-group">
                      <label class="h3">Add Category</label>
                      <input type="text" class="form-control" name="cat_title" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-round btn-primary">Add Category</button>
                    </div>

                  </form>
                    <form class="form-horizontal form-label-left" action="" method="post">
                    <div class="form-group">
                      <label class="h3">Update Category</label>
                      <input type="text" class="form-control" name="cat_title" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="update" class="btn btn-round btn-success">Update Category</button>
                    </div>

                  </form>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 table-responsive">
                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title">Id </th>
                            <th class="column-title">Category Title </th>
                            <th class="column-title no-link last"><span class="nobr">Actions</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
<?php

$query = "SELECT * FROM categories";
$select_All_Categories = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_All_Categories)){
 $cat_id = $row['cat_id'];
 $cat_title = $row['cat_title'];


 echo "<tr class='even pointer'>";
 echo "<td class='a-center ''>
 <div class='icheckbox_flat-green' style='position: relative;'><input type='checkbox' class='flat' name='table_records' style='position: absolute; opacity: 0;'><ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div>
</td>";
echo "<td class=''>{$cat_id}</td>";
echo "<td class=''>{$cat_title}</td>";
echo "<td class=''><a class='btn btn-danger' href='categories.php?delete={$cat_id}' ><i class='fa fa-trash'></i></a> <a class='btn btn-primary' href='categories.php?update={$cat_id}' ><i class='fa fa-pencil'></i></a>
</td>";
echo "</tr>";
}

?>
    
<?php
if(isset($_GET['delete'])){
    $cat_delete = $_GET['delete'];

    $query = "DELETE FROM categories WHERE cat_id = {$cat_delete}";

    $selected_delete = mysqli_query($connection, $query);

    
    header("location: categories.php");

    if(!$selected_delete){
        die("Delete Query Failed" . mysqli_error($connection));
    }

}
?>
<?php
if(isset($_GET['update'])){
    $cat_update = $_GET['update'];

    $query = "SELECT * categories WHERE cat_id = {$cat_update}";

    $selected_update = mysqli_query($connection, $query);

    
    header("location: categories.php");

    if(!$selected_update){
        die("update Query Failed" . mysqli_error($connection));
    }

}
?>



                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
        </div>
        <!-- /page content -->

        <!-- include footer content -->
        <?php include('includes/footer.php') ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- date and time javascript -->
    <script>
      let a;
      let date;
      let time;
      const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
      };
      setInterval(() => {
        a = new Date();
        date = a.toLocaleDateString(undefined, options);
        time = a.toLocaleTimeString("en-US");

        document.getElementById("time").innerHTML = time;
        document.getElementById("date").innerHTML = date;
      }, 1000);
    </script>
    <!-- WeatherForcast -->
    <script>
      !(function (d, s, id) {
        var js,
          fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
          js = d.createElement(s);
          js.id = id;
          js.src = "https://weatherwidget.io/js/widget.min.js";
          fjs.parentNode.insertBefore(js, fjs);
        }
      })(document, "script", "weatherwidget-io-js");
    </script>
  </body>
</html>
