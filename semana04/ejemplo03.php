<?php 
/*
define("SERVER_BD", "192.168.1.17");
const USER_BD = "root";
echo SERVER_BD;
echo "<br>";
echo USER_BD;
*/
define("SERVER","localhost");
define("USER", "root");
define("PASS", "");
define("BD", "tunel_gmb");

define("CONFIG",array("SERVER"=>'localhost',"USER"=>"root","PASS"=>"","BD"=>"tunel_gmb"));

echo CONFIG["SERVER"];
echo "<br>";
echo CONFIG["USER"];

 ?>