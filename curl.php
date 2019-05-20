<?php

class Curl {

   public function callAPI($method, $url, $data) {
     $curl = curl_init();

     switch ($method) {
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       default:
          if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
     }

     //Option settings
     curl_setopt($curl, CURLOPT_URL, $url);
     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
       'x-api-version: 2'
     ));
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

     // Execute
     $result = curl_exec($curl);
     if(!$result){die("Connection Failed");}
     curl_close($curl);

     return $result;
   }

   public function getAPIdata() {
     $getData = $this->callAPI('GET', 'http://api.ratings.food.gov.uk/establishments?localAuthorityId=87', false);
     $response = json_decode($getData, true);
     return $response;
   }
}

?>
