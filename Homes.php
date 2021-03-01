<?php
include("Database.php");
class Home extends Database{

    public $id;
    public $name;
    public $address;

    function insert($name=null , $address=null)
    {
        
        $this->name = $name;
        $this->address = $address;
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
            $sql = "INSERT INTO homes (name, address)
            VALUES ('$this->name', '$this->address')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
    }
    function delete($id = null)
    {
        $this->id = $id;

        try {

            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
            $sql = "DELETE FROM homes WHERE id=$id";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
    }
    function update($id=null,$name=null , $address =null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address =$address;
        try {

        $conn = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
        $sql = "UPDATE `homes` SET `name` ='$name', `address` ='$address' WHERE `homes`.`id`=$id";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    }

    
}
?>
