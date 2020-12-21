<?php
include "get_info.php";
$naam = $_POST["naam"];
$voornamen = $_POST["voornamen"];
$alias = $_POST["alias"];
$plaats = $_POST["plaats"];
$geb = $_POST["datum"];
$natio = $_POST["natio"];
$id_nr = $_POST["id"];
$pasp = $_POST["pasp"];

$subject->check_info($conn,$naam,$voornamen,$alias,$plaats,$geb,$natio,$id_nr,$pasp);
?>