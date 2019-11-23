<?php
class ConnectionDB
{
  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;
  public function __construct(){
      $this->host     = 'localhost';
      $this->db       = 'crypto_email';
      $this->user     = 'root';
      $this->password = '12345';
      $this->charset  = 'utf8';
  }
  public function connect(){
      try{
          $connection = "mysql:host=". $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
          $options = [
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES   => true,
          ];
          // $pdo = new PDO($connection, $this->user, $this->password, $options);
          $pdo = new PDO($connection, $this->user, $this->password);
          return $pdo;
      }catch(PDOException $e){
          print_r('Error connection: ' . $e->getMessage());
      }
  }
  private function disconnect ( $stmt ) {
    $stmt->closeCursor();
    $stmt = null;
 }
  public function executeQuery($sql='', $values=array())
  {
    if($sql != ''){
      $statement = $this->connect() -> prepare($sql);
      $statement -> execute($values);
      $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
      $this->disconnect($statement);
      return $result;
    }else{
      return null;
    }
  }
  public function executeInsert($sql='', $values=array())
  {
    if($sql != ''){
      $statement = $this->connect() -> prepare($sql);
      $statement -> execute($values);
      $result = ($statement->rowCount() > 0);
      $this->disconnect($statement);
      return $result;
    }
  }
  public function executeUpdate($sql='', $values=array())
  {
    if($sql != ''){
      $statement = $this->connect() -> prepare($sql);
      $statement -> execute($values);
      $result = $statement->rowCount();
      $this->disconnect($statement);
      return $result;
    }else {
      return 0;
    }
  }
  public function executeDelete($sql='', $values=array())
  {
    if($sql != ''){
      $statement = $this->connect() -> prepare($sql);
      $statement -> execute($values);
      $this->disconnect($statement);
      return true;
    }else {
      return false;
    }
  }
}
?>