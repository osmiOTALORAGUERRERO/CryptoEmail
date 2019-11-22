<?php
require_once 'ConnectionDB.php';
$db = new ConnectionDB();
// $db->connect();
$sql = 'SELECT * FROM receivedmessages 
INNER JOIN messages ON receivedmessages.idMessage = messages.id
INNER JOIN users ON receivedmessages.`from` = users.id 
WHERE idUser IN (SELECT id FROM users WHERE email = "dyg9812@gmail.com")';
print(json_encode($db->executeQuery($sql,array())));

?>