<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//ini_set("soap.wsdl_cache_enabled", 0);

$siteRootDir = realpath('..');

set_include_path(
    $siteRootDir . '' . PATH_SEPARATOR 
    . get_include_path()
);

require_once '../Process/ProcessOperation.php';

if ($_SERVER['QUERY_STRING'] == 'wsdl')
{
	// Utilizamos la clase Zend_Soap_AutoDiscover para
	// generar de forma autom�tica el WSDL
	require_once '../Zend/Soap/AutoDiscover.php';
	$wsdl = new Zend_Soap_AutoDiscover();
	$wsdl->setClass('ProcessOperation');
	$wsdl->handle();
}
else
{
	
    $wsdl_url = sprintf('http://%s%s?wsdl', $_SERVER['HTTP_HOST'], $_SERVER['SCRIPT_NAME']);
    
	// Creamos un servidor que atienda en base al WSDL generado
	require_once('../Zend/Soap/Server.php');
	$server = new SoapServer($wsdl_url,array('trace'=>true));
	$server->setClass('ProcessOperation');
	$server->handle();
}
?>
