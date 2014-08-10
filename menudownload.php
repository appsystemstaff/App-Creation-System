<?php session_start();  
				
header("Content-Type: text/html; charset=utf-8"); 
 echo file_get_contents("xls/menu.html");
header('Content-disposition: attachment; filename="menu.html"');

?>