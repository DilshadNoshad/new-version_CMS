<?php
if(isset($_GET['p-id'])){
$select_update_id = $_GET['p-id'];

$query = "SELECT * FROM posts WHERE post_id = $select_update_id";
$select_all_posts = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_posts)){
$post_id = $row['post_id'];
$post_author = $row['post_author'];
$post_title = $row['post_title'];
$post_category_id = $row['post_category_id'];
$post_status = $row['post_status'];
$post_image = $row['post_image'];
$post_content = $row['post_content'];
$post_tags = $row['post_tags'];
$post_comment_count = $row['post_comment_count'];
$post_date = $row['post_date'];
}
}

if(isset($_POST['update_post'])){
    $post_title =  $_POST['title'];
    $post_author =  $_POST['author'];
    $post_category_id =  $_POST['post_category'];
    $post_status =  $_POST['post_status'];

    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];

    $post_tags =  $_POST['post_tags'];
    $post_content =  $_POST['post_content'];

    if(empty($post_image)){

        $query = "SELECT * FROM posts WHERE post_id = $select_update_id";
        $selected_image_show = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selected_image_show)){
        $post_image = $row['post_image'];
    }
    }
    move_uploaded_file($post_image_temp, "../img/$post_image");

    $query = "UPDATE posts SET ";
    $query .= "post_title = '{$post_title}', ";
    $query .= "post_author = '{$post_author}', ";
    $query .= "post_category_id = '{$post_category_id}', ";
    $query .= "post_date = now(), ";
    $query .= "post_status = '{$post_status}', ";
    $query .= "post_image = '{$post_image}', ";
    $query .= "post_tags = '{$post_tags}', ";
    $query .= "post_content = '{$post_content},' ";
    $query .= "WHERE post_id = '{$select_update_id}' ";

    $update_selected_posts = mysqli_query($connection, $query);

    confirm_query($update_selected_posts);

}
?>

<form method="post" enctype="multipart/form-data">

<div class="col-md-9 col-sm-12  form-group">
<label class="col-form-label col-md-2 col-sm-2 label-align" for="title">Title</label>
<div class="col-md-7 col-sm-10 ">
<input type="text" value="<?php echo $post_title ?>" name="title"   class="form-control">
</div>
</div>

<div class="col-md-6 col-sm-12  form-group">
<label class="col-form-label col-md-3 col-sm-2 label-align" for="post_category_id">Select Category</label>
<div class="col-md-9 col-sm-10 ">
<select name="post_category" class="form-control">
<?php
$query = "SELECT * FROM categories";
$fetch_all_categories = mysqli_query($connection, $query);

confirm_query($fetch_all_categories);

while($row = mysqli_fetch_assoc($fetch_all_categories)){
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title']; 
echo "<option value='{$cat_id}'>{$cat_title}</option>";
}
?> 
                          </select>
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="author"
>Post Author
</label>
<div class="col-md-9 col-sm-10">
<input type="text" value="<?php echo $post_author ?>" name="author"  class="form-control" />
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="post_status"
>Post Status
</label>
<div class="col-md-9 col-sm-10">
<input type="text" value="<?php echo $post_status ?>" name="post_status"  class="form-control" />
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="post_tags"
>Post Tags
</label>
<div class="col-md-9 col-sm-10">
<input type="text" value="<?php echo $post_tags ?>" name="post_tags"  class="form-control" />
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="post_image"
>Post Image
</label>
<div class="col-md-9 col-sm-10">
<img width="100" src="../img/<?php echo $post_image ?>" alt="">
<input type="file" name="post_image"  class="form-control" />
</div>
</div>

<div class="col-md-9 col-sm-12 form-group">
<label
class="col-form-label col-md-2 col-sm-2 label-align"
for="post_content"
>Post Content
</label>
<div class="col-md-7 col-sm-10">
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content ?></textarea>
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">

<input type="submit" class="btn btn-round btn-primary" name="update_post"
    value="publish post">

</div>



</form>
