<?php
    session_start();
    require_once "api/login.php";
    if(isset($_SESSION['user_email'])){
        $login = new Login();
        $user = $login->getUser($_SESSION['user_email']);
        require_once 'views/email/email.php';
    }else {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = new Login();
            var_dump($login->validate($email, $password));
            if($login->validate($email, $password)){
                $_SESSION['user_email'] = $email;
                header('location: ');
            }
        }
        require_once 'views/login.php';
    }
?>