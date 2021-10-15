<div class="x_content">

<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

<div class="table-responsive">
<table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Id </th>
                            <th class="column-title">Author </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Category </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Image </th>
                            <th class="column-title">Tags </th>
                            <th class="column-title">Comments </th>
                            <th class="column-title">Date </th>
                            <th class="column-title"><span>Actions</span>
                            </th>
                            <th class="bulk-actions" colspan="9">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
<?php
$query = 'SELECT * FROM posts';
$select_all_posts = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_posts)){
$post_id = $row['post_id'];
$post_author = $row['post_author'];
$post_title = $row['post_title'];
$post_category_id = $row['post_category_id'];
$post_status = $row['post_status'];
$post_image = $row['post_image'];
$post_tags = $row['post_tags'];
$post_comment_count = $row['post_comment_count'];
$post_date = $row['post_date'];

echo "<tr class='even pointer' >";
echo "<td class='a-center '>
<input type='checkbox' class='flat' name='table_records'>
</td>";
echo "<td>{$post_id}</td>";
echo "<td>{$post_author}</td>";
echo "<td>{$post_title}</td>";
echo "<td>{$post_category_id}</td>";
echo "<td>{$post_status}</td>";
echo "<td><img width='100' src='../img/{$post_image}' alt='image'></td>";
echo "<td>{$post_tags}</td>";
echo "<td>{$post_comment_count}</td>";
echo "<td>{$post_date}</td>";
echo "<td><a class='btn btn-primary' href='posts.php?source=edit_posts&p-id={$post_id}' ><i class='fa fa-pencil'></i></a><a class='btn btn-danger' href='posts.php?delete={$post_id}'><i class='fa fa-trash'></i></a></td>";
echo "</tr>";
}
?>

<?php
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];

    $query = "DELETE FROM posts ";
    $query .= "WHERE post_id = $delete_id ";

    $delete_selected_post_id = mysqli_query($connection, $query);
}
?>
                        </tbody>
                      </table>


</div>


</div>