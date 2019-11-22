<?php
require_once 'DB/ConnectionDB.php';
class Login {
    private $connectionDB = null;
    public function __construct() {
        $this->connectionDB = new ConnectionDB();
    }
    public function validate(string $email, string $password) : bool
    {
        $access = false;
        $sql = 'SELECT * FROM crypto_email.users WHERE email=:email';
        $options = array(':email'=>$email);
        $user = $this->connectionDB->executeQuery($sql, $options);

        if(!is_null($user)){
            if(password_verify($password, $user[0]['password'])){
                $access = true;
            }
        }
        return $access;
    }

    public function getUser(string $email)
    {
        $user = null;
        $sql = 'SELECT name, email FROM users WHERE email=:email';
        $options = array(':email'=>$email);
        $user = $this->connectionDB->executeQuery($sql, $options);

        return $user[0];
    }
}
?>