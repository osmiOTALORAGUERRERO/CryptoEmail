<?php
require_once 'ConnectionDB.php';
$db = new ConnectionDB();
$db->connect();
// print($db->executeQuery('SELECT * FROM crypto_email.users WHERE email="dyg9812@gmail.com"',array()));
?>