<?php

require_once("DemandeSimu.php");
require_once("databuilder.php");

class ajoutclient
{

	/**
	* ajout method
	*
	*@param string $n Nom de l'emprunteur
	*@param string $p Prenom de l'emprunteur
	*@param int    $a Age de l'emprunteur
	*@param string $ad Adresse de l'emprunteur
	*@param string $v ville de l'emprunteur
	*@param int    $cp Code postal de l'emprunteur
	*@param int    $m Montant de l'emprunt
	*@param int    $ap Apport du client sur l'emprunt
	*@param int    $d Durée de l'emprunt
	*/
	public function ajout($n, $p, $a, $ad, $v, $cp, $m, $ap, $d)
	{
		$data = new databuilder();
		$data->connect();

		$client = new DemandeSimu($n, $p, $a, $ad, $v, $cp, $m, $ap, $d);

		$data->add($client);
	}
}
?>