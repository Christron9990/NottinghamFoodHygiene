<?php
include_once ('database/databaseconnection.php');
include_once ('curl.php');

class DataHandling {

  public function RetrieveData(){
    try {
       $curl = new Curl();
       $apiResponse = $curl->getAPIdata();
       return $apiResponse;
    }
    catch(PDOException $e)
    {
      echo "Error: " . $e->getMessage();
    }
  }


}

?>
