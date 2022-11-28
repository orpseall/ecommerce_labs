<?php
include("../controllers/admin_controller.php");

if(isset($_POST['submit']))
{
    $brand=$_POST['brand'];

    //echo "$brand";
    $results = addBrand_ctr($brand);

    if($results){
        header('Location: ../admin/index.php');
    }else{
        echo "Please try again";
    }

}