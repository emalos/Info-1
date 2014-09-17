<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

  class RestService {

    private $obj_call;
    private $obj_view;
    
    function __construct($obj_call) {
      $this->obj_call = $obj_call;
      $this->obj_view = new View();
    }
    
    public function suma($x=0,$y=0) {  
      $result = $this->obj_call->sumar($x,$y);
      return $this->obj_view->output($result);
      
    }
    public function resta($x=0,$y=0) {
      $result = $this->obj_call->restar($x,$y);
      return $this->obj_view->output($result);

    }

}
?>
