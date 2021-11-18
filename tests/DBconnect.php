<?php 

$user = 'root';
$pass ='';
$db = 'tourcompany';

$db = new mysqli ('localhost', $user, $pass, $db) or die ("Unable to connect");

echo "You are connected";



?>