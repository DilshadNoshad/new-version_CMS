
                <form class="form-horizontal form-label-left" action="" method="post">
                <div class="form-group">
                    <label class="h3">Update Category</label>
    <?php
    if(isset($_GET['update'])){
    $cat_update = $_GET['update'];

    $query = "SELECT * FROM categories WHERE cat_id = {$cat_update}";
    $fetch_all_categories = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($fetch_all_categories)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];   
    ?>
    <input value="<?php if(isset($cat_title)){ echo $cat_title; } ?>" type="text" class="form-control" name="cat_title" placeholder="Enter Category Name">
    <?php }} ?>
                      
                    </div>

 
                    <div class="form-group">
                      <button type="submit" name="update" class="btn btn-round btn-success">Update Category</button>
                    </div>

                  </form>

    <?php

    if(isset($_POST['update'])){
    $cat_update_value = $_POST['cat_title'];

    $query = "UPDATE categories SET cat_title = '{$cat_update_value}' ";
    $query .= "WHERE cat_id = {$cat_id} ";

    $Update_query = mysqli_query($connection, $query);

    if(!$Update_query){
    die("query Failed" . mysqli_error($connection));
    }
    }
    ?>