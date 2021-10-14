<?php

function confirm_query($result){
    global $connection;
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    }
}

function insertCategories(){
    global $connection;
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
}

function showAllCategories(){
    global $connection;

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
}

function deleteCategories(){
    global $connection;

    if(isset($_GET['delete'])){
        $cat_delete = $_GET['delete'];
    
        $query = "DELETE FROM categories WHERE cat_id = {$cat_delete}";
    
        $selected_delete = mysqli_query($connection, $query);
    
        
        header("location: categories.php");
    
        if(!$selected_delete){
            die("Delete Query Failed" . mysqli_error($connection));
        }
    
    }
}

?>