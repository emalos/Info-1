<?php


require_once 'Controller/RestService.php';
require_once 'Controller/SoapService.php';
require_once 'Model/CallRest.php';
require_once 'Model/CallSoap.php';
require_once 'View/View.php';

$result_rest="<label>0</label>";
$result_soap="<label>0</label>";

if(isset($_REQUEST["rest"])){
  
  $x= $_REQUEST['int_rest1'] ;
  $y= $_REQUEST['int_rest2'];  
  
  $obj_call = new CallRest();
  $obj_restService=new RestService($obj_call);

  $result_rest= $obj_restService->{$_POST['rest']}($x,$y);

  
}elseif(isset($_REQUEST["soap"])){
  

  $x=$_REQUEST['int_soap1'];
  $y=$_REQUEST['int_soap2'];  
  
  $obj_call = new CallSoap();
  $obj_soapService=new soapService($obj_call);

  $result_soap= $obj_soapService->{$_POST['soap']}($x,$y);
  
}

?>


<!DOCTYPE html>

    <head>

    </head>
    <body>

        <p>Servicio REST </p>  
        
        <form name="input" action="index.php" method="post">
          <p><input type="text" name="int_rest1" placeholder="1"></p>
          <p><input type="text" name="int_rest2" placeholder="1"></p>
           <p><input type="submit" name="rest" value="suma">
           <input type="submit" name="rest" value="resta"></p>
           <p><?php echo $result_rest;?></p>
          
        </form>
        
        <p>Servicio SOAP </p>  
        
        <form name="input2" action="index.php" method="post">
           <p><input type="text" name="int_soap1" placeholder="1"></p>
           <p><input type="text" name="int_soap2" placeholder="1"></p>
           <p><input type="submit" name="soap" value="suma">
           <input type="submit" name="soap" value="resta"></p>
           <?php echo $result_soap;?>
          
        </form>

    </body>
</html>
