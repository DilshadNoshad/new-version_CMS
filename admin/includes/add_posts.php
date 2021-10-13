<?php
if(isset($_POST['create_post'])){
$post_title =  $_POST['title'];
$post_author =  $_POST['author'];
$post_category_id =  $_POST['post_category_id'];
$post_status =  $_POST['post_status'];

$post_image = $_FILES['post_image']['name'];
$post_image_temp = $_FILES['post_image']['tmp_name'];

$post_tags =  $_POST['post_tags'];
$post_content =  $_POST['post_content'];

$post_date =  date('d-m-y');
$post_comment_count =  4;

    move_uploaded_file($post_image_temp, "../img/$post_image");
}
?>
    <form method="post" enctype="multipart/form-data">

    <div class="col-md-9 col-sm-12  form-group">
    <label class="col-form-label col-md-2 col-sm-2 label-align" for="post_category">Title</label>
    <div class="col-md-7 col-sm-10 ">
    <input type="text"  name="post_category"  value="" class="form-control">
    </div>
    </div>

    <div class="col-md-6 col-sm-12  form-group">
    <label class="col-form-label col-md-3 col-sm-2 label-align" for="post_category">Post Category Id </label>
    <div class="col-md-9 col-sm-10 ">
    <input type="text"  name="post_category"  value="" class="form-control">
    </div>
    </div>

    <div class="col-md-6 col-sm-12 form-group">
    <label
    class="col-form-label col-md-3 col-sm-2 label-align"
    for="author"
    >Post Author
    </label>
    <div class="col-md-9 col-sm-10">
    <input type="text" name="author" value="" class="form-control" />
    </div>
    </div>

    <div class="col-md-6 col-sm-12 form-group">
    <label
    class="col-form-label col-md-3 col-sm-2 label-align"
    for="post_status"
    >Post Status
    </label>
    <div class="col-md-9 col-sm-10">
    <input type="text" name="post_status" value="" class="form-control" />
    </div>
    </div>

    <div class="col-md-6 col-sm-12 form-group">
    <label
    class="col-form-label col-md-3 col-sm-2 label-align"
    for="post_tags"
    >Post Tags
    </label>
    <div class="col-md-9 col-sm-10">
    <input type="text" name="post_tags" value="" class="form-control" />
    </div>
    </div>

    <div class="col-md-6 col-sm-12 form-group">
    <label
    class="col-form-label col-md-3 col-sm-2 label-align"
    for="post_image"
    >Post Image
    </label>
    <div class="col-md-9 col-sm-10">
    <input type="file" name="post_image" value="" class="form-control" />
    </div>
    </div>

    <div class="col-md-9 col-sm-12 form-group">
    <label
    class="col-form-label col-md-2 col-sm-2 label-align"
    for="post_content"
    >Post Content
    </label>
    <div class="col-md-7 col-sm-10">
    <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>
    </div>

    <div class="col-md-6 col-sm-12 form-group">

    <input type="submit" class="btn btn-round btn-primary" name="create_post"
        value="publish post">

    </div>



    </form>

