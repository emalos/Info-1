<?php



/**
 * 
 */
class ProcessOperation {

  function __construct() {
    
  }
  
 /**
  * 
  * @param int $x
  * @param int $y
  * @return int 
  */
  function sumar($x,$y) {
//   error_log($y,3,"/Users/edwinmalo/logs/text.log");
    $suma = 0;
    $suma = $x + $y;
    return $suma;
  }
  
 
  /**
   * 
   * @param int $x
   * @param int $y
   * @return int
   */
  function restar($x,$y) {
    $suma = 0;
    $suma = $x - $y;
    return $suma;
  }

}
?>
