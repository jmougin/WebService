<?php

	$db = pg_connect("host=172.18.207.1 dbname=CN_Imhoff user=postgres password=0550002D");

	$req = "Select * from commercial where login='".$_POST['login']."' and password='".$_POST['password']."';";
	//echo $req;
	$reusult = pg_query($db, $req);
	if($reusult == false)
	{
		header('Location: http://172.18.202.179/Jquery%20mobile/mobileClientFinancement/connComm.php');
	} 
?>