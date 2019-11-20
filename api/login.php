<?php
require_once 'DB/connectionDB.php'
class Login {
    $connectionDB = null;
    public function __construct() {
        $connectionDB = new connectionDB();
    }
    public function validate(string $email, string $password) : bool
    {
        
    }
}
?>