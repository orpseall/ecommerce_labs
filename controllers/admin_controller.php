<?php

require "../classes/admin_class.php";

//--ADD--//
function addBrand_ctr($brand){
    $add_brand = new admin_class();

    return $add_brand->addBrand_cls($brand);
}

//--SELECT--//
// function selectOneBrand_ctr($email){
//     $select_one_customer = new customer_class();

//     return $select_one_customer->login_cls($email);
// }
