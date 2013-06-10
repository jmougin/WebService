<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web application - Simulateur de crédit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
    <!--
    <link href="./lib/jquery.mobile-1.2.0.min.css" rel="stylesheet" type="text/css"/>
    <script src="./lib/jquery-1.9.1.min.js"></script>
    <script src="./lib/jquery.mobile-1.2.0.min.js" type="text/javascript"></script>
    -->
</head>
<body>
<div id="main" data-role="page" data-theme="c">
    <div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="#page">Vers le site CN</a>
    </div>
    <div data-role="content">
        <p>Afin d'avoir une simulation concluante, veuillez remplir tout les champs ci-dessous</p>
        <form action="resuFinan.php" method="post">
            <div data-role="fieldcontain">
                <label for="global">Montant du projet : </label>
                <input type="text" name="global" id="global" value=""/>
            </div>
            <div data-role="fieldcontain">
                <label for="apport">Montant de votre apport : </label>
                <input type="text" name="apport" id="apport" value=""/>
            </div>
            <div data-role="fieldcontain">
                <label for="duree">Durée du prêt : </label>
                <input type="range" name="duree" id="duree" value="15" min="1" max="40" />
            </div>
            <div data-role="fieldcontain">
                <label for="age">Votre âge : </label>
                <input type="range" name="age" id="age" value="30" min="18" max="80" />
            </div>
            <input type="submit" value="Valider"/>
        </form>
        Commercial ? Connectée vous <a href="/Jquery%20mobile/mobileClientFinancement/connComm.php">ici</a>

    </div>
    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>
</body>
</html>