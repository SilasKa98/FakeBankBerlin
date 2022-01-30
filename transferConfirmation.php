<?php
include 'db_connector.php';

$sql = "select *from ueberweisungen WHERE id = (select max(id) FROM ueberweisungen)";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL Statement failed";
}else{
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    print "<div id='allMitarbeiter'>";
    while ($row = $result->fetch_assoc()) {
       $name = $row["name"];
       $iban = $row["iban"];
       $betrag = $row["betrag"];
       $zweck = $row["zweck"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="themes/basic/template.css">
    <link rel="stylesheet" href="themes/transfereConfirmation.css">
  </head>

  <body>
    <header>    
      <div class="container">
        <div class="row">
          <div class="col-md-12">
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.columnCstm {
  width: 43%;
  padding: 0 45px;
  margin: 20px  auto;
}


/* Clear floats after the columns */
.rowCstm:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .columnCstm {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.cardCstm{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 9px;
  text-align: center;
  background-color: #f1f1f1;
}



/*** */

/* Float four columns side by side */
.columnInfo {
  width: 22%;
  padding: 0 45px;
  margin: 20px  auto;
}


/* Clear floats after the columns */
.rowInfo:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .columnInfo {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.cardInfo{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  background-color: #f1f1f1;
  background-color: #f5a4a4;
  border-radius: 4px;
}


/*** */


h1{
    margin-top: 30px;
    margin-bottom: 20px;
    text-align: center;
}
#greenCheck{
    width:100px;
    margin-left: 900px;
    animation: fadeIn 5s;
  -webkit-animation: fadeIn 5s;
  -moz-animation: fadeIn 5s;
  -o-animation: fadeIn 5s;
  -ms-animation: fadeIn 5s;
}

@keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-moz-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-webkit-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-o-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}

@-ms-keyframes fadeIn {
  0% {opacity:0;}
  100% {opacity:1;}
}


.detailText{
    font-size: 14pt;
}

.InfoText{
    font-size: 11pt;
}

#betrag{
    color: #41bf41;
    font-weight: bold;
}

#infoIcon{
    float: left;
    margin-top: 20px;
    margin-left: 5px;
    margin-right: 8px;
    width: 20px;
}
</style>
<body>
<header>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="margin-top:8px;">
              <span id="logo" class="oi" data-glyph="glyph"></span>
              Bundesbank Berlin
            </h2>
          </div>
        </div>
      </div>
    </header>
    <h1>Die Überweisung war erfolgreich</h1>
    <img id="greenCheck" src="ownIcons/greenCheck.png"/>
    <div class="rowCstm">
      <div class="columnCstm">
        <div class="cardCstm">
          <h3>Begünstigter</h3>
          <p class="detailText"><?php echo $name; ?></p>
        </div>
      </div>
    </div>
    <div class="rowCstm">
      <div class="columnCstm">
        <div class="cardCstm">
          <h3>IBAN des Begünstigten</h3>
          <p class="detailText"><?php echo $iban; ?></p>
        </div>
      </div>
    </div>
    <div class="rowCstm">
      <div class="columnCstm">
        <div class="cardCstm">
          <h3>Überwiesener Betrag</h3>
          <p class="detailText"><span id='betrag'><?php echo $betrag; ?></span> €</p>
        </div>
      </div>
    </div>

    <div class="rowCstm">
      <div class="columnCstm">
        <div class="cardCstm">
          <h3>Verwendungszweck</h3>
          <p class="detailText"><?php echo $zweck; ?></p>
        </div>
      </div>
    </div>

    <div class="rowInfo">
      <div class="columnInfo">
        <div class="cardInfo">
          <img src="ownIcons/careRed.png" id="infoIcon"/>
          <p class="detailText"><b>Achtung</b> - Bitte beachten Sie, dass der Geldeingang beim Begünstigten bis zu 24h in Anspruch nehmen kann!</p>
        <div class="columnInfo">
            <div class="cardInfo">
                <img src="ownIcons/careRed.png" id="infoIcon">
                <p class="InfoText"><b>Achtung</b> - Bitte beachten Sie, dass der Geldeingang beim Begünstigten bis zu 24h in Anspruch nehmen kann!</p>
        </div>
      </div>
      <br/>
      <br/>
      <div class="content footer">
        <div class="container">
          <p>Member FDIC: No. Rates and investment products are not insured.</p>
          <p>The bank information provided on this website is only valid for those living in states that end in G and no others. Any attempt to use this website without authorized access is prohibited by the 11th circuit court of the high magistrates. No offers may be made or accepted from any resident outside of these states due to various state regulations and registration requirements regarding investment products and services.</p>
          <p>            &copy; Copyright 2020 GGNOREE LLP, LLC, UDP.</p>
        </div>
      </div>
    </div>
  </body>
</html>