<?php

class login{

  protected $connection;
  function __construct($con){
    $this->connection = $con;
  }

  public function getLogin($username,$password){
    $stmt = $this->connection->prepare("SELECT COUNT(*) FROM user WHERE username=:username AND password=:password");
    $stmt->bindparam(":username,$username");
    $stmt->bindparam(":password,$password");
    $stmt->execute();
    if ($stmt < 1) {
      $stmt = $this->connection->prepare("SELECT * FROM admin WHERE username=:username AND password=:password");
      $stmt->bindparam(":username,$username");
      $stmt->bindparam(":password,$password");
      $stmt->execute();
    }
    $result = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $result[] = $row;
    }
    return $result;
  }

}


?>
