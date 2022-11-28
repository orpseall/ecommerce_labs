<?php
include ("../settings/db_class.php");

class admin_class extends db_connection
{
    //--ADD--//
//add customer
function addBrand_cls($brand){

    $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$brand')";

    return $this->db_query($sql);
}

//--SELECT--//
//login


//edit customer

//delete customer

}