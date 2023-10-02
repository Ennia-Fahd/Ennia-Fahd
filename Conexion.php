<?php
session_start();
if(isset($_GET["Ville"])){
    $ville=$_GET["Ville"];
}
else {$ville= $_SESSION['Ville'];}
$pdo = new PDO("mysql:host=localhost;dbname=$ville", "root", "");


?>