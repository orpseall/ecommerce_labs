<?php

require "../classes/customer_class.php";

//--ADD--//
function addCustomer_ctr($name,$email,$password,$country,$city,$contact,$userrole){
    $add_item = new customer_class();

    return $add_item->addCustomer_cls($name,$email,$password,$country,$city,$contact,$userrole);
}

//--SELECT--//
function selectOneCustomer_ctr($email){
    $select_one_customer = new customer_class();

    return $select_one_customer->login_cls($email);
}
