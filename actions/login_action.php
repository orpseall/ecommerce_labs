<?php

require("../controllers/customer_controller.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = selectOneCustomer_ctr($email);

    $selected_password = $check['customer_pass'];

    if($check){
        if(password_verify($password,$selected_password)){
            session_start();
            $_SESSION['cid'] = $check['customer_id'];
            $_SESSION['role'] = $check['user_role'];
            $_SESSION['name'] = $check['customer_name'];

            header('Location: ../view/landing_page.php');
        }else{
            echo "Login Failed. Please try again";
        }
    }
}else{
    echo "Login Failed";
}