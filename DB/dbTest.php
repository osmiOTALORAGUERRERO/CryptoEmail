<?php
require_once 'ConnectionDB.php';
$db = new ConnectionDB();
// $db->connect();
$sql = ' INSERT INTO messages (transmitter, receiver, message) VALUES (1, 2, "no se que decir")';
print(json_encode($db->executeInsert($sql,array())));


?>