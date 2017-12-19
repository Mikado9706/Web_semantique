<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=pictionnary', "root", "", array( PDO::ATTR_PERSISTENT => true ));
} catch (Exception $e) {
	throw $e;
}
?>