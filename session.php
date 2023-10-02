<?php
session_start();
if(isset($_POST['Deconexion'])){
 
 session_destroy();
header('location: index.php');
}
?>