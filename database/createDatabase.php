<?php
include_once ('databaseconnection.php');
include_once ('datahandling.php');

$getData = new DataHandling();

class Database {

  public function QueryDatabase($query)
  {
    try {
       $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $conn->exec($query);
       if($conn){
       echo "Query Successful";
     }
    }
    catch(PDOException $e)
    {
       echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
  }

  public function GetFoodHygieneArray() {
    $hygieneArray = $getdata->RetrieveData();
    return $hygieneArray;
  }


  public function CreateTables() {
    try {
    $establishmentsTable =
    "CREATE TABLE IF NOT EXISTS establishments (
      EstablishmentID bigint(20) NOT NULL AUTO_INCREMENT,
      FHRSID int(6) NOT NULL,
      LocalAuthorityBusinessID int(8) NOT NULL,
      BusinessName text(50) NOT NULL,
      BusinessType text(25) NOT NULL,
      BusinessTypeID int(5) NOT NULL,
      AddressLine1 text(30),
      AddressLine2 text(30),
      AddressLine3 text(30),
      AddressLine4 text(30),
      PostCode varchar(8),
      Phone varchar(12),
      RatingValue int(1),
      RatingKey varchar(10),
      RatingDate datetime,
      LocalAuthorityCode int(4),
      LocalAuthorityName text(20),
      LocalAuthorityWebSite text(60),
      LocalAuthorityEmailAddress text(50),
      HygieneScore int(1) NOT NULL,
      StructuralScore int(1) NOT NULL,
      ConfidenceScore int(1) NOT NULL,
      PRIMARY KEY (EstablishmentID))";
      $getData->QueryDatabase($establishmentsTable);
    }
    catch (PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}
?>
