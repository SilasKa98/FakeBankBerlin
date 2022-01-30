<?php

include 'db_connector.php';

$name = $_POST["name"];
$iban = $_POST["iban"];
$betrag = $_POST["betrag"];
$zweck = $_POST["zweck"];
$datum = date('Y-m-d H:i:s');
$typ = "Überweisung";

$sql ="INSERT INTO ueberweisungen (name,iban,betrag,zweck,datum,typ) VALUES (?,?,?,?,?,?);";			
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL error";
}else{
  mysqli_stmt_bind_param($stmt, "ssssss", $name, $iban, $betrag, $zweck, $datum, $typ);
  mysqli_stmt_execute($stmt);
}

header("LOCATION: transferConfirmation.php");
?>