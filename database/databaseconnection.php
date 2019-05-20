<?php
include_once ('dbparameters.php');

class Connect {

  public function ConnectToDatabase()
  {
    try {
       $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // if($conn){
       //  echo "Database connected successfully";
      }
      catch(PDOException $e)
      {
         echo "Connection failed: " . $e->getMessage();
      }
      $conn = null;
  }
}
 ?>
