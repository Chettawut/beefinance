<?php

define('ROOT',str_replace("\\",'/',dirname(__FILE__))); 
define('PATH', ROOT == $_SERVER['DOCUMENT_ROOT'] ?'' :substr(ROOT,strlen($_SERVER['DOCUMENT_ROOT'])) ); 
// var_dump(in_array( $_SERVER['SERVER_PORT'], array('443', '80') ));
$GLOBALS['BASE_URL'] = url();

 
function url(){   
  return sprintf ( 
    "%s://%s%s/%s", 
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', 
    !(strpos($_SERVER['SERVER_NAME'], 'localhost') > -1 || strpos($_SERVER['SERVER_NAME'], '127.0.0.1') > -1 ) ? "kaemoneygroup.com" : "localhost", 
    isset($_SERVER['SERVER_PORT']) && !(in_array($_SERVER['SERVER_PORT'], array('443', '80'))) ? ":{$_SERVER['SERVER_PORT']}" : '', 
    !(strpos($_SERVER['SERVER_NAME'], 'localhost') > -1 || strpos($_SERVER['SERVER_NAME'], '127.0.0.1') > -1 ) ? "" : "oc"
  ); 
} 

?>



