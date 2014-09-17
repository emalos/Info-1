<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */

require_once '../Process/ProcessOperation.php';

//get the raw HTTP post data
$post = file_get_contents('php://input');
$xml = str_replace("\n", "", $post);
$xml = new SimpleXMLElement($xml);
$obj_operation = New ProcessOperation();
$call = (string)$xml->type;
$x=$xml->x;
$y=$xml->y;
$result=$obj_operation ->{$call}($x, $y); 
echo "$result";

?>
