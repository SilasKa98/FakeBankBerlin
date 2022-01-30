<?php

include 'db_connector.php';

$name = $_POST["name"];
$iban = $_POST["iban"];
$betrag = $_POST["betrag"];
$zweck = $_POST["zweck"];

$sql ="INSERT INTO ueberweisungen (name,iban,betrag,zweck) VALUES (?,?,?,?);";			
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL error";
}else{
  mysqli_stmt_bind_param($stmt, "ssss", $name, $iban, $betrag, $zweck);
  mysqli_stmt_execute($stmt);
}

header("LOCATION: transferConfirmation.php");
?>