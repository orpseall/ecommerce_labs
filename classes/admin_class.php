<?php
include ("../settings/db_class.php");

class admin_class extends db_connection
{
    //-------------BRAND------------------//
//add brand
function addBrand_cls($brand_name){

    $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$brand_name')";

    return $this->db_query($sql);
}

//--SELECT--//
function selectBrand_cls(){
    $sql = "SELECT * FROM `brands`";
    return $this->db_fetch_all($sql);
}

//edit brand
function editBrand_cls($brand_id, $brand_name){
    $sql = "UPDATE `brands` SET brand_name = '$brand_name' WHERE brand_id = '$brand_id'";

    return $this->db_query($sql);
}

//delete brand
function deleteBrand_cls($brand_id){
    $sql = "DELETE FROM `brands` WHERE brand_id = '$brand_id'";

    return $this->db_fetch_all($sql);
}


// -----------------CATEGORY-----------//
//add category
function addCategory_cls($category_name){

    $sql = "INSERT INTO `categories` (`cat_name`) VALUES ('$category_name')";

    return $this->db_query($sql);
}

//--SELECT--//
function selectCategory_cls(){
    $sql = "SELECT * FROM `categories`";
    return $this->db_fetch_all($sql);
}

function viewOneCategory_cls($category_id){
    $sql = "SELECT * FROM `categories` WHERE cat_id = '$category_id'";
    return $this->db_fetch_one($sql);
}

//edit category
function editCategory_cls($category_id, $category_name){
    $sql = "UPDATE `categoriess` SET cat_name = '$category_name' WHERE cat_id = '$category_id'";

    return $this->db_query($sql);
}

//delete category
function deleteCategory_cls($category_id){
    $sql = "DELETE FROM `categories` WHERE cat_id = '$category_id'";

    return $this->db_fetch_all($sql);
}
}