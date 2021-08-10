<?php 
    include "config/config.php";
    try {
        $conn = new PDO('mysql:host=localhost;dbname=Banco', DBUSER, DBPASS);
    } 
    catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>