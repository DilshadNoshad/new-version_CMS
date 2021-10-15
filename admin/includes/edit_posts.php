<?php
if(isset($_GET['p-id'])){
$select_update_id = $_GET['p-id'];
$query = 'SELECT * FROM posts';
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
?>
<form method="post" enctype="multipart/form-data">

<div class="col-md-9 col-sm-12  form-group">
<label class="col-form-label col-md-2 col-sm-2 label-align" for="title">Title</label>
<div class="col-md-7 col-sm-10 ">
<input type="text" value="<?php echo $post_title ?>" name="title"  value="" class="form-control">
</div>
</div>

<div class="col-md-6 col-sm-12  form-group">
<label class="col-form-label col-md-3 col-sm-2 label-align" for="post_category_id">Post Category Id </label>
<div class="col-md-9 col-sm-10 ">
<input type="text" value="<?php echo $post_category_id ?>"  name="post_category_id"  value="" class="form-control">
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="author"
>Post Author
</label>
<div class="col-md-9 col-sm-10">
<input type="text" value="<?php echo $post_author ?>" name="author" value="" class="form-control" />
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="post_status"
>Post Status
</label>
<div class="col-md-9 col-sm-10">
<input type="text" value="<?php echo $post_status ?>" name="post_status" value="" class="form-control" />
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">
<label
class="col-form-label col-md-3 col-sm-2 label-align"
for="post_tags"
>Post Tags
</label>
<div class="col-md-9 col-sm-10">
<input type="text" value="<?php echo $post_tags ?>" name="post_tags" value="" class="form-control" />
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
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content ?></textarea>
</div>
</div>

<div class="col-md-6 col-sm-12 form-group">

<input type="submit" class="btn btn-round btn-primary" name="create_post"
    value="publish post">

</div>



</form>
