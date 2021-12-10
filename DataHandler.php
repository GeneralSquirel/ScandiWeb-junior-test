<?php

class dataHandler
{
  private $dbServerName;
  private $dbUserName;
  private $dbPassword;
  private $dbName;
  private $dbCharset;

  // function __construct()
  // {
  //   $this->dbServerName = "Localhost";
  //   $this->dbUserName = "root";
  //   $this->dbPassword = "";
  //   $this->dbName = "scandiweb";
  //
  // }

  public function connect()
  {
    $this->dbServerName = "Localhost";
    $this->dbUserName = "root";
    $this->dbPassword = "";
    $this->dbName = "scandiweb";
    $this->dbCharset = "utf8mb4";



    try {
      $dsn = "mysql:host=".$this->dbServerName.";dbname=".$this->dbName.";charset=".$this->dbCharset;
      $pdo = new PDO($dsn,$this->dbUserName,$this->dbPassword);

      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      return $pdo;

    } catch (PDOException $e) {
      echo "Connection failled: ".$e->getMessage();

    }

  }
}








?>
