<?php
include('../controllers/admin_cat_controller.php');
$category_id = $_GET['cat_id'];


?>

<?php

require ("../controllers/admin_cat_controller.php");

if(isset($_POST['editcat']))
{
    $category_id = $_POST['cat_id'];
    $category_name = $_POST['cat_name'];

    $results = editCategory_ctr($category_id,$category_name);
    
    if($results){
        header('Location: ../admin/edit_category.php');
    }else{
        echo 'Failed to edit category. try again';
    }
}