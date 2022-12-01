<?php
include("../controllers/admin_cat_controller.php");

if(isset($_GET['submit']))
{
    $category_name=$_GET['category_name'];

    //echo "$brand";
    $results = addCategory_ctr($category_name);

    if($results){
        header('Location: ../admin/add_category.php');
    }else{
        echo "Please try again";
    }

}

