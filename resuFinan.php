<?php
session_start();
$client = new SoapClient("http://172.18.207.102/~cimhoff/wsrest/Simulateur.wsdl");
$glob = 0;
$mensu = 0;
$assu = 0;

$_SESSION['montant'] = $_POST['global'];
$_SESSION['duree'] = $_POST['duree'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['apport'] = $_POST['apport'];
try {
    $mensu = $client->calculMensualite($_POST['age'], $_POST['duree'], $_POST['apport'], $_POST['global']);
    $assu = $client->calculMensualiteAssurance($_POST['age'], $_POST['duree'], $_POST['apport'], $_POST['global']);
    $glob = $client->calculMensualiteGlobale($_POST['age'], $_POST['duree'], $_POST['apport'], $_POST['global']);
} catch (SoapFault $exception) {
    echo $exception;
}
?>

<div id="resu" data-role="page" data-theme="c">
    <div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="" data-rel="back">Retour</a>
    </div>
    <div data-role="content">
        <h2>Votre simulation</h2>
        Pour un projet de <?php echo $_POST['global']; ?> euros<br/>
        Avec un apport de <?php echo $_POST['apport']; ?> euros<br/>
        Sur une durée de <?php echo $_POST['duree']; ?> an(s)<br/>
        <br/>
        Votre mensualité globale calculée s'élève à <?php echo $glob;?> par mois.

        <br/>
        <br/>
        Celle ci se compose d'une mensualité hors assurance de <?php echo $mensu;?> et d'une assurance de <?php echo $assu;?>.
        <br />
        <br />
        Si cette simulation vous intéresse, vous pouvez nous laisser vos coordonées. Un banquier vous joindra ultérieurement pour un eventuel rendez-vous.
   
        <form action="formcontact.php" method="POST">
            <input type="submit" value="Vos coordonnées">
        </form>
    </div>
    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>