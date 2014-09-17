<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CallSoap {

  public $suma;
  public $resta;
  
    function __construct() {
      
    }
    
    public function sumar($x,$y) {  

      $client = new SoapClient("http://localhost/NetBeansProjects/INFO/LAB_WS/ws/Soap/SoapOperation.php?wsdl",array('trace'=>true, 
          'cache_wsdl' => WSDL_CACHE_NONE,
          'location'=>'http://localhost/NetBeansProjects/INFO/LAB_WS/WS/Soap/SoapOperation.php'));

      $xml = "<sumar><x>$x</x><y>$y</y></sumar>";
      $result = $client->__soapCall("sumar",array($x,$y));

      return $result;
    }
    public function restar($x,$y) {
      
      $client = new SoapClient("http://localhost/NetBeansProjects/INFO/LAB_WS/ws/Soap/SoapOperation.php?wsdl",array('trace'=>true, 'cache_wsdl' => WSDL_CACHE_NONE));

      $result = $client->restar($x,$y);

      return $result;
    }

}
?>
