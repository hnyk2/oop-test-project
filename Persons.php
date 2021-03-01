<?php
include("Database.php");
class Person extends Database{

    public $id;
    public $name;
    public $home;

    function insert($name="" ,$home=0)
    {
        $this->name = $name;
        $this->home = $home;
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
            $sql = "INSERT INTO persons (name,home_id)
            VALUES ('$this->name', '$this->home')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
    }
    function delete()
    {
        echo "delete";
    }
    function update()
    {
        echo "update";
    }

    
}
?>
