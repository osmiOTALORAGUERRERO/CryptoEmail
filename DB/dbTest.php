<?php
session_start();
require_once 'ConnectionDB.php';
$db = new ConnectionDB();
// $db->connect();
$sql = 'SELECT MAX(id) as id from crypto_email.messages';
$id_message = $db->executeQuery($sql); 
print_r($id_message);

// $sql = 'INSERT INTO sentmessages (idUser, idMessage, `for`) VALUES (:idUser, :idMessage, :for)';
// $options = array(':idUser'=>1, ':idMessage'=>$id_message[0]['id'], ':for'=>2);
// $insert = $db->executeInsert($sql, $options);
// $sql = ' INSERT INTO messages (transmitter, receiver, message) VALUES (1, 2, "no se que decir")';
// print(json_encode($db->executeQuery($sql, $options)));
// var_dump($insert);


?>