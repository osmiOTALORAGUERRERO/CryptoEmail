<?php
session_start();
require_once '../DB/ConnectionDB.php';
if (isset($_SESSION['user_email'])) {
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $connectionDB = new ConnectionDB();
        if($_POST['type_request']=='users'){
            $sql = 'SELECT id, name, email FROM users';
            $users = $connectionDB->executeQuery($sql);
            echo json_encode($users);
        }else if($_POST['type_request']=='write'){
            $sql = 'SELECT id FROM users WHERE email=:email';
            $options = array(':email'=>$_SESSION['user_email']);
            $transmitter = $connectionDB->executeQuery($sql, $options);
            
            $options = array(':email'=> $_POST['email']);
            $receiver = $connectionDB->executeQuery($sql, $options);
            
            $sql = ' INSERT INTO messages (transmitter, receiver, message) VALUES (:transmitter, :receiver,:message)';
            $options = array(':transmitter'=> $transmitter[0]['id'], ":receiver" => $receiver[0]['id'], ':message' => $_POST['message']);
            $insert = $connectionDB->executeInsert($sql, $options);

            $sql = 'SELECT MAX(id) as id from crypto_email.messages';
            $id_message = $connectionDB->executeQuery($sql);
            
            $sql = 'INSERT INTO receivedmessages (idUser, idMessage, `from`) VALUES (:idUser, :idMessage, :from)';
            $options = array(':idUser'=> $receiver[0]['id'],":idMessage" =>$id_message[0]['id']  , ':from'=>$transmitter[0]['id']);
            $insert = $connectionDB->executeInsert($sql, $options);

            $sql = 'INSERT INTO sentmessages (idUser, idMessage, `for`) VALUES (:idUser, :idMessage, :for)';
            $options = array(':idUser'=> $transmitter[0]['id'],":idMessage" => $id_message[0]['id'], ':for'=>$receiver[0]['id']);
            $insert = $connectionDB->executeInsert($sql, $options);
            
            
            if($insert==true) {
                echo json_encode(array('succes'=> true));
            }else{
                echo json_encode(array('succes'=> false));
            }
                    
        }
    }
}
?>


