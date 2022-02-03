<?php

include 'db_connector.php';

$konto = $_POST["konto"];
$name = $_POST["name"];
$iban = $_POST["iban"];
$betrag = $_POST["betrag"];
$zweck = $_POST["zweck"];
$datum = date('Y-m-d H:i:s');
$typ = "Überweisung";

$sql ="SELECT id from konten where name = ?;";			
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL error0";
}else{
  mysqli_stmt_bind_param($stmt, "s", $konto);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $konto = $result->fetch_assoc()["id"];
  $sql ="INSERT INTO ueberweisungen (name,iban,betrag,zweck,datum,typ,konto) VALUES (?,?,?,?,?,?,?);";			
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL error1";
  }else{
    mysqli_stmt_bind_param($stmt, "ssdsssi", $name, $iban, $betrag, $zweck, $datum, $typ, $konto);
    mysqli_stmt_execute($stmt);
  }

  $sql ="UPDATE konten SET kontostand = kontostand - ? WHERE id = ?;";
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL error2";
  }else{
    echo $betrag;
    echo $konto;
    mysqli_stmt_bind_param($stmt, "sd", $betrag, $konto);
    mysqli_stmt_execute($stmt);
  }
}


header("LOCATION: transferConfirmation.php");
?>