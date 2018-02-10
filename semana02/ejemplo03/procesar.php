<?php 

//var_dump($_FILES['archivo']);
/*
foreach ($_FILES['archivo'] as $key => $value) {

  echo $key.": ".$value."<br>";

}*/

echo $_FILES['archivo']['type'];
echo "<br>";

$filename    = $_FILES['archivo']['tmp_name'];
$destination = "files/".$_FILES['archivo']['name'];

if (move_uploaded_file($filename, $destination))
{
  echo "archivo subido correctamente";
} 
else 
{
  echo "error";
}






 ?>