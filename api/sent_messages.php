<?php
session_start();
require_once '../DB/ConnectionDB.php';

if (isset($_SESSION['user_email'])) {
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $connectionDB = new ConnectionDB();
        $sql = 'SELECT * FROM sentmessages 
        INNER JOIN messages ON sentmessages.idMessage = messages.id
        INNER JOIN users ON sentmessages.`for` = users.id 
        WHERE idUser IN (SELECT id FROM users WHERE email = :email) ORDER BY create_time DESC';
        $options = array(':email'=>$_SESSION['user_email']);
        $received_messages = $connectionDB->executeQuery($sql, $options);
        echo json_encode($received_messages);
    }
}
?> 



