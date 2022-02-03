<?php

include 'db_connector.php';

$username = $_POST["user"];
$password = $_POST["pass"];

$sql ="SELECT id from benutzer where name = ? and password = ?;";			
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL error";
}else{
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $userID = $result->fetch_assoc()["id"];
  if($userID == NULL){
    # document.getElementById('loginerror').style.visibility = "visible"
    header("LOCATION: index.php=login");
  }
  else{
    header("LOCATION: account.php?user=".$userID);
  }
}
?>