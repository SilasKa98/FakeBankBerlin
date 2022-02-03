<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="themes/basic/template.css">
    <title>Bundesbank Berlin Login</title>
	  <link rel="shortcut icon" href="favicon.ico?r=random1" type="image/x-icon">
	  <link rel="icon" href="favicon.ico?r=random1" type="image/x-icon">
	  <link rel="favicon" href="favicon.ico?r=random1" type="image/x-icon">

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
              <span id="logo" class="oi" data-glyph="glyph"></span>
              Bundesbank Berlin
            </h2>
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
                <li class="nav-item"><a class="nav-link" href="#">Privat</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Geschäftlich</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="triggerInactive()">Anlegen</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontakt</a></li>
                <li class="nav-item"><a class="nav-link"  id="log" href="/logout.php">Über uns</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="dog">
      <div class="container">
        <div id="sideswap" class="row">
          <div class="col-md-4">
            <div id="login-box" class="epic">
              <form action="loginSubmit.php" method="POST">
                <h4 class="ltitle">Online Banking</h4>
                <select id="thiswontmatter">
                  <option>Privat</option>
                  <option>Geschäftlich</option>
                  <option>Anlegen</option>
                </select>
                <input id="username"  type="text" name="user" placeholder="username">
                <input  id="password" style="margin-top:8px;" type="password" name="pass" placeholder="password">
                <div id="loading">Bitte warten...</div>
                <div class="spacer"></div>
                <input type="submit" value="Einloggen">
              </form>
              <p id="loginerror" 
              <?php 
              if (isset($_GET["error"]) && $_GET["error"] == "login"){
                echo "";
              }else{
                echo "hidden";
              }
              ?>
              >Bitte überprüfen Sie Ihre Eingabe.</p>
            </div>
          </div>
        	<div class="col-md-8 headline">
        		<h1 style="font-size: 2rem;">Sehr geehrter Kunde!</h1>
        		<h4>
              Investieren ist wie eine Schachtel Pralinen, man weiß nie, was man bekommt. 
              Bei uns wird jeder glücklich. Reiche werden reicher und Arme immer ärmer.
              Teuer kaufen, damit man billig weiterverkaufen kann.
              Ihre Bank zu vertrauen ist einfach, deshalb sollten Sie es tuen.
              Jetzt mit festverzinslichen Kriegsanleihen
            </h4>
        		<br>
        		<div id="mobile" class="darker">
              <h3>Mobile App</h3>
              <p>Laden Sie sich unsere App noch heute herunter!</p>
              <a href="#">Try Mobile Banking</a>
              <img src="/img/GooglePlay.svg" /><img src="/img/AppStore.svg" />
            </div>
        	</div>
        </div>
      </div>
    </div>
    <div id="fastlinks">
      <div class="container">
        <div class="row">
          <div class="col">
            <span class="oi" data-glyph="person"aria-hidden="true"></span>
            <h4>Herausragende Rendite</h4>
          </div>
          <div class="col">
            <span class="oi" data-glyph="wifi"aria-hidden="true"></span>
            <h4>Mobiles Girokonto</h4>
          </div>
          <div class="col">
            <span class="oi" data-glyph="globe"aria-hidden="true"></span>
            <h4>Investment Tipps</h4>
          </div>
        </div>
      </div>
    </div>
    <div id="threethings">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4>Anleihen Center <span class="oi" data-glyph="caret-right"aria-hidden="true"></span></h4>
            <p>Wenn Sie denken alle Banken sind gleich, dann haben Sie recht. Es geht immer nur um Geld Geld Geld baby.</p>
          </div>
          <div class="col">
            <h4>Ausbildungszentrum <span class="oi" data-glyph="caret-right"aria-hidden="true"></span></h4>
            <p>Lass uns eine Sekunde darüber nachdenken wie das Leben wäre, wenn jeder jeden Tag Bücher lesen würde.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content">   
      <div class="container">
        <div id="homecontent" class="row">
          <div class="col-md-8">
            <h3>Das Bankwesen muss nicht kompliziert sein, ist es aber trotzdem.</h3>
            <p>
              Wir sind leidenschaftlich darum bemüht, Ihr Geld auf unsere Bank zu bringen und machen vor nichts Halt, um dies zu erreichen. 
              In der heutigen Hund-frisst-Hund-drisst-Katze-frisst-Vogel-frisst-Wurm Welt sind wir auf starke Verbündete angewiesen. 
              Als mächtige Verbündete vieler mächtiger Weltpolitiker können wir die Antwort auf Ihre Probleme sein. 
            </p>

            <p>
              Wussten Sie, dass das Bankwesen eine ganze Reihe von Problemen lösen kann?
              <br>
              Hier bei der Bundesbank lösen wir die Probleme von morgen schon heute.
              Wir bringen das Du in die Gemeinschaft. Es gibt keine physischen Zweigstellen, 
              so dass wir die Ersparnisse weiter fließen lassen können.
            </p>
          </div>
          <div id="ccbox" class="col-md-4">
            <div class="thing">
              <h4>Competitive Rates</h4>
              <ul>
                <li>Mortgage 15yr <span>5.05</span></li>
                <li>Mortgage 30yr <span>6.9</span></li>
                <li>5yr CD  <span>0.05%</span></li>
                <li>War Bond <span>1.3%</span></li>
              </ul>
              <small>
                <a href="#">Disclosures</a>
              </small>
            </div>
            <div class="thing">
                <h4>Today's Rates</h4>
                <ul>
                    <li>Auto Loans <span>4.20</span></li>
                    <li>Home Equity Loans <span>6.54</span></li>
                    <li>Mortgage 15yr <span>5.05</span></li>
                    <li>Mortgage 30yr <span>6.9</span></li>
                </ul>
                <small>
                  <a href="#">Disclosures</a>
                </small>
            </div>
            <div class="thing">
                <h4>Refer A Friend!</h4>
                <img width="250" src="https://images.unsplash.com/photo-1560472355-536de3962603?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" />
                <br>
                <a href="#">Learn More</a>
            </div>
            <div class="thing">
                <h4>Questions?</h4>
                <p>We have representitives standing by 24/7</p>
                <a href="#">Contact Support</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="rates" class="content shaded">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="text-align: center;">
            <h3>Cash Me Outside, How 'Bout Dat</h3>
          </div>
          <div class="col-md-4">
            <h5>Online Transfers</h5>
            <h1>0.42%</h1>
            <a href="#">Details ></a>
          </div>
          <div class="col-md-4">
            <h5>Credit Card</h5>
            <h1>0.12%</h1>
            <a href="#">Details ></a>
          </div>
          <div class="col-md-4">
            <h5>International</h5>
            <h1>1.37%</h1>
            <a href="#">Details ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="content footer">
      <div class="container">
        <p>Member FDIC: No. Rates and investment products are not insured.</p>
        <p>
          The bank information provided on this website is only valid for those living in states that end in G and no others. 
          Any attempt to use this website without authorized access is prohibited by the 11th circuit court of the high magistrates. 
          No offers may be made or accepted from any resident outside of these states due to various state regulations and 
          registration requirements regarding investment products and services.
        </p>
        <p>            &copy; Copyright <?php echo date('Y'); ?> GGNOREE LLP, LLC, UDP.</p>
      </div>
    </div>
    <div id="twofactor" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Two Factor Auth</h5>
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Please enter the code that was sent to your phone below:
            <br>
            <div class="form-group">
              <input class="form-control" id="code" type="text" name="pass" placeholder="_ _ _ _ _ _">
            </div>
            <small class="badcode">
              The authentication code you entered is invalid. Please try again. 
            </small>
          </div>
          <div class="modal-footer">
              <button type="button" id="codesubmit">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div id="captcha" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">For your safety...</h5>
          </div>
          <div class="modal-body">
            Please select all the <span id="catName">cats</span> from the pictures below.
            <br>
            <div class="form-group">
              <div id="game"></div>
            </div>
            <small class="badcode">
              The authentication code you entered is invalid. Please try again. 
            </small>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="captchasubmit" disabled="disabled">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div id="mathquiz" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">For your safety...</h5>
          </div>
          <div class="modal-body">
            Please solve the following simple math problem:
            <br>
            <div class="form-group">
              <div id="quiz">
                <input id="quizanswer" type="text" placeholder="answer">
              </div>
            </div>
            <small class="badcode">
              The answer is incorrect, please try again.  
            </small>
          </div>
          <div class="modal-footer">
              <button type="button" id="mathsubmit">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/script.js"></script>
  </body>
</html>