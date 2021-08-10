<?php 
    define("SITESUBFOLDER", "/LabIII");
	define("SITEROOT", $_SERVER["DOCUMENT_ROOT"].SITESUBFOLDER);
	define("SITEURL", "http://".$_SERVER["SERVER_NAME"].SITESUBFOLDER);
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "Banco");

	try {
		$conn = new PDO('mysql:host=localhost;', DBUSER, DBPASS);
		$sql = "CREATE DATABASE IF NOT EXISTS Banco";
		$conn->query($sql);
	
		$conn = new PDO('mysql:host=localhost;dbname=Banco', DBUSER, DBPASS);
		$sql  = "CREATE TABLE IF NOT EXISTS ED (";
		$sql .=	"id int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,";
		$sql .=	"pergunta VARCHAR(1000) NOT NULL,";
		$sql .=	"resposta VARCHAR(1000) NOT NULL );";
		$conn->query($sql);
		
		$sql .="CREATE TABLE IF NOT EXISTS RC (";
		$sql .=	"id int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,";
		$sql .=	"pergunta VARCHAR(1000) NOT NULL,";
		$sql .=	"resposta VARCHAR(1000) NOT NULL );";
		$conn->query($sql);

		$conn = null;
	} 
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>