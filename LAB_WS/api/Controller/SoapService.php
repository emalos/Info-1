<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


  class SoapService {

    private $obj_call;
    public $result;
    private $obj_view;

    
    function __construct($obj_call) {
      $this->obj_call = $obj_call;      
      $this->obj_view = new View();

    }
    
    
    public function suma($x,$y) {  
      $this->result = $this->obj_call->sumar($x,$y);
      return $this->obj_view->output($this->result);

      
    }
    public function resta($x,$y) {
      $this->result = $this->obj_call->restar($x,$y);
      return $this->obj_view->output($this->result);

    }

}
?>