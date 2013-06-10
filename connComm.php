<div id="conn" data-role="page" data-theme="c">
	<div data-role="header">
        <h1>Simulateur de crédit immobilier</h1><a href="" data-rel="back">Retour</a>
    </div>

		<div data-role="content">
			<h2>Connexion au service commercial</h2>
				<form action="listDemande.php" method="POST">
					<div data-role="fieldcontain">
						<label for "login">Login</label>
						<input type="text" name="login" id="login" value="">
					</div>
					<div data-role="fieldcontain">
						<label for "password">Mot de passe</label>
						<input type="password" name="password" id="password" value="">
					</div>
					<input type="submit" value="Connexion">
				</form>
		</div>

    <div data-role="footer" style="text-align:center">
        <footer>Copyright 2013@CN&BanquoCrédit</footer>
    </div>
</div>