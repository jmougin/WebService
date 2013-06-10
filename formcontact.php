
<div id="contact" data-role="page" data-theme="c">  
    <div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="" data-rel="back">Retour</a>
    </div>

    <div data-role="content">
    	<h2>Vos coordonées</h2>
    	<form action="envoidata.php" method="POST">
    		<div data-role="fieldcontain">
    			<label for="nom">Nom</label>
    			<input type="text" name ="nom" id="nom" value="">
       		</div>
       		<div data-role="fieldcontain">
    			<label for="prenom">Prenom</label>
    			<input type="text" name ="prenom" id="prenom" value="">
       		</div>
       		<div data-role="fieldcontain">
    			<label for="adresse">Adresse</label>
    			<input type="text" name ="adresse" id="adresse" value="">
       		</div>
       		<div data-role="fieldcontain">
    			<label for="ville">Ville</label>
    			<input type="text" name ="ville" id="ville" value="">
       		</div>
       		<div data-role="fieldcontain">
    			<label for="cp">Code postal</label>
    			<input type="text" name ="cp" id="cp" value="">
       		</div>
       		<input type="submit" value="Envoyer">
    	</form>
    </div>

    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>