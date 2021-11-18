<?php
try{
$db = new PDO('mysql:host=localhost; dbname=registration; charset=utf8', 'root', '');
var_dump($db);
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Database created successfully<br>";
}

catch(PDOException $e){
	echo $sql . "<br>" . $e->getMessage();
}
$db=null;

?>



   
    
    
   
