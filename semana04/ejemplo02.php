<?php 

//var_dump($_SERVER);
/*
foreach ($_SERVER as $key => $value) {
	 
 echo $key.": ".$value."<br>";

}*/

//echo $_SERVER['HTTP_USER_AGENT'];
 
/*
 $data   = "valor1";
 $data  .= "valor2";

 echo $data;
*/

$data = "";


foreach ($_SERVER as $key => $value) {
 
 $data .=$key.": ".$value."<br>";

}


echo $data;
 ?>