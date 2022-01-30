<?php
include 'db_connector.php';
?>

<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="themes/basic/template.css">
    <title>Benutzerkonto</title>
	  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	  <link rel="icon" href="favicon.ico" type="image/x-icon">
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
          <div class="col-md-8">
            <h2 style="margin-top:8px;">
            <span id="logo" class="oi" data-glyph="glyph"></span>Bundesbank Berlin</h2>
          </div>
          <div class="col-md-4">
            <img src="\img\icons\open-iconic-master\png\BundeBankBerlinLogo.png" width="50" align="right">
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
    <div class="container" id="stuff">
      <div id="activitylist" class="row">
        <h4>Ihre Transaktionen:</h4>
        <hr>
        <div id="recent-box">
          <table id="pending" class="table table-striped">
            <thead>
              <tr>
                <th>Datum</th>
                <th>Konto</th>
                <th>Beschreibung</th>
                <th>Typ</th>
                <th>Betrag</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "select * from ueberweisungen";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL Statement failed";
                }else{
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }
                while ($row = $result->fetch_assoc()){
                  echo "<tr>";
                  echo "<td>".$row["datum"]."</td>";
                  echo "<td>".$row["iban"]."</td>";
                  echo "<td>".$row["zweck"]."</td>";
                  echo "<td>".$row["typ"]."</td>";
                  echo "<td>".$row["betrag"]." €</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="spacer"></div>
    </div>
    <div class="content footer">
      <div class="container">
        <p>Member FDIC: No. Rates and investment products are not insured.</p>
        <p>
          The bank information provided on this website is only valid for those living in 
          states that end in G and no others. Any attempt to use this website without authorized 
          access is prohibited by the 11th circuit court of the high magistrates. No offers may 
          be made or accepted from any resident outside of these states due to various state 
          regulations and registration requirements regarding investment products and services.
        </p>
        <p>            &copy; Copyright 2020 GGNOREE LLP, LLC, UDP.</p>
      </div>
    </div>
    <div id="inactivityPopup">
      <div class="iseriouslydontcare">
        <h2>For Your Safety</h2>
        <p>You have been safely logged out due to inactivity.</p>
        <p>Please wait a moment and log back in. </p>
        <p>To return to the login page <a href="/">click here</a>.</p>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    </script>

  </body>
</html>