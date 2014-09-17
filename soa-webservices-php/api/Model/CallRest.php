<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CallRest {

  public $suma;
  public $resta;
  
    function __construct() {
      
    }

    
    public function sumar($x=0,$y=0) {
      
      $url="http://localhost/NetBeansProjects/INFO/LAB_WS/ws/Rest/RestOperation.php";
      $curl = curl_init($url);
		
      $fields_string="<request><type>sumar</type><x>".$x."</x><y>".$y."</y></request>";
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 
      curl_setopt($curl, CURLOPT_HEADER, 0); 
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

      $data = curl_exec($curl);
      $curl_error = curl_error($curl);


      curl_close($curl);

      if($data)
      {
          return $data;
      }
      else if($curl_error)
      {
          return $curl_error;
      }
      else 
      {
          return 0;
      }
      
    }
    
    
    public function restar($x=0,$y=0) {
      
      $url="http://localhost/NetBeansProjects/INFO/LAB_WS/ws/Rest/RestOperation.php";
      $curl = curl_init($url);
		
      $fields_string="<request><type>restar</type><x>".$x."</x><y>".$y."</y></request>";
              
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 
      curl_setopt($curl, CURLOPT_HEADER, 0); 
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

      $data = curl_exec($curl);
      $curl_error = curl_error($curl);
     
      curl_close($curl);

      if($data)
      {
          return $data;
      }
      else if($curl_error)
      {
          return $curl_error;
      }else{
        return 0;
      }
      
   }

}
?>
