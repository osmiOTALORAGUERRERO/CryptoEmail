<?php
require_once 'DB/connectionDB.php';
class Login {
    private $connectionDB = null;
    public function __construct() {
        $connectionDB = new connectionDB();
    }
    public function validate(string $email, string $password) : bool
    {
        $access = false;
        $sql = 'SELECT * FROM crypto_email.users WHERE email=:email';
        $options = array(':email'=>$email);
        $user = $connectionDB->executeQuery($sql, $options);

        if(!is_null($user)){
            if(password_verify($password, $user[0]['password'])){
                $access = true;
              }
        }
        return $access;
    }
}
?>