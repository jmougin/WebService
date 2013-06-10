<html>
	<head>
<?php

session_start();
$simulation = new SoapClient("http://172.18.207.102/~cimhoff/wsrest/ajoutclient.wsdl");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$montant = $_SESSION['montant'];
$age = $_SESSION['age'];
$apport = $_SESSION['apport'];
$duree = $_SESSION['duree'];

print_r($_SESSION);
try {
	$simulation->ajout($nom, $prenom, $age, $adresse, $ville, $cp, $montant, $apport, $duree);

	}catch (SoapFault $e)
	{
		//echo $e;
	}

try {

	$db = pg_connect("host=172.18.207.1 dbname=CN_Imhoff user=postgres password=0550002D");

	$req = "Insert into client(nom, prenom, age, adresse, ville, cp, montant, apport, duree)
	 		Values('".$nom."', '".$prenom."', ".$age.", '".$adresse."', '".$ville."', ".$cp.", ".$montant.", ".$apport.", ".$duree.")";
	pg_query($db, $req);

}catch (Exception $e){
}
?>
	
<?php
	header('Location: http://172.18.202.179/Jquery%20mobile/mobileClientFinancement/');
?>

	</head>
</html>