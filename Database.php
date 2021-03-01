<?php

abstract class Database{
  
public $servername ="localhost";
public $username = "root";
public $password = "";
public $database = "project";

function connect(){
try {
  $conn = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}

abstract function insert();
abstract function delete();
abstract function update();


}
?>
