<?php

require("../controllers/customer_controller.php");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $userrole=1;
    //$image=NULL

    //echo "$name $email $password $country $city $contact $userrole";
    $results = addCustomer_ctr($name,$email,$password,$country,$city,$contact,$userrole);

    if($results){
        header('Location: ../view/login.php');
    }else{
        echo "Registration Failed. Please try again";
    }

}