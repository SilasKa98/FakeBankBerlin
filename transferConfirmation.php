<?php
include 'db_connector.php';

$sql = "select * from ueberweisungen WHERE id = (select max(id) FROM ueberweisungen)";
$stmt = mysqli_stmt_init($connection);
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL Statement failed";
}else{
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
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
    <link rel="stylesheet" href="themes/transferConfirmation.css">
  </head>

  <body>
  	<div class="preheader">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav>
							<ul> 
            		<li style="color:grey">Produkte</li>
            		<li style="color:grey">Dienstleistungen</li>
            		<li style="color:grey">Hilfe</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
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
		<div class="menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
  					<nav>
							<ul class="nav mx-auto">
								<li class="nav-item"><a class="nav-link" href="account.php">Ihr Konto</a></li>
								<li class="nav-item"><a class="nav-link" href="transfer.php">Bezahlungen und Überweisungen</a></li>
								<li class="nav-item"><a class="nav-link" href="wip.html">Kontakt</a></li>
								<li class="nav-item"><a class="nav-link"  id="log" href="index.html">Logout</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
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