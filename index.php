<?php
    session_start();
    if(isset($_SESSION['user_email'])){
        require_once 'views/email/email.php';
    }else {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            require_once "api/login.php";
            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = new Login();

            if($login->validate($email, $password)){
                $_SESSION['user_email'] = $email;
                header('location: '.$_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF']);
            }
        }
        require_once 'views/login.php';
    }
?>