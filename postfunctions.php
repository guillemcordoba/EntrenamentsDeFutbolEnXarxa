<?php

// Form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include_once "inc/class.exercici.inc.php";
	$ex = new Exercici;
	$ex->constructFromArray($_POST);
	include_once "db/CtrlDB.php";
	$ctrlDB = new CtrlDB;
	$ctrlDB -> addOrUpdateExercici($ex);

}
?>