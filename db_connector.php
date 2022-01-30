<?php

$connection = new mysqli("localhost:3307", "root");
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  if (!$connection->select_db("fakeBankBerlin")) {
    print "DB existiert nicht.";
    $connection->close();
    exit();
  }
?>

