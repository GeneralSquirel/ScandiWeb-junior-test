<?php

class dataHandler
{
  private $dbServerName;
  private $dbUserName;
  private $dbPassword;
  private $dbName;
  private $dbCharset;
  private $pdo;


  public function connect()
  {
    $this->dbServerName = "localhost";
    $this->dbUserName = "s145392_scandiweb";
    $this->dbPassword = "A8zblPLBxT";
    $this->dbName = "s145392_scandiweb";
    $this->dbCharset = "utf8mb4";



    try {
      $dsn = "mysql:host=".$this->dbServerName.";dbname=".$this->dbName.";charset=".$this->dbCharset;
      $this->pdo = new PDO($dsn,$this->dbUserName,$this->dbPassword);

      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      return $this->pdo;

    } catch (PDOException $e) {
      echo "Connection failled: ".$e->getMessage();
    }
  }

  public function writeData($querry){
    try {
      $this->pdo->exec($querry);
    } catch (PDOException $e) {
        echo "Write function failled: ".$e->getMessage();
    }


  }
  public function ReadData($querry)
  {
  }
}








?>
