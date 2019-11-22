<?php
session_start();
require_once '../DB/ConnectionDB.php';

if (isset($_SESSION['user_email'])) {
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $connectionDB = new ConnectionDB();
        $sql = 'SELECT id, name, email FROM crypto_email.users';
        $users = $connectionDB->executeQuery($sql);
        echo json_encode($users);
    }
}
?>