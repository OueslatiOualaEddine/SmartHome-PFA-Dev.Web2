

<form   style=" width: 55vw; margin-left : 17vw;" name="form2" method="post" action="index.php?controller=client&action=created" >
	<fieldset style="text-align: center;" id="format" class="Connexion">
		<legend> <h3>  Nouveau Client </h3> </legend>
		<fieldset id="format">
			<legend> <h4>  Information Personelle </h4> </legend>
			
			<label for="Nomation"> CIN </label>
			<input type="text" name="Nomation" id="Nomation" required />
			<br>

			<label for="Nomation"> Nom </label>
			<input type="text" name="Nomation" id="Nomation" required />
			<br>
			
			<label for="Prenomation"> Prenom </label>
			<input type="text" name="Prenomation" id="Prenomation" required />
			<br>
			
			<label for="Genre"> Genre </label>
			<select name="civilité" id="Genre" >
				<option value="Monsieur" selected > M </option>
				<option value="Madame" > Mme </option>
				<option value="Madamoiselle" > Melle </option>
			</select>
			<br>
			
			<label for="naissance"> Date de Naissance </label>
			<input type="date" name="naissance" id="naissance" value="1992-01-01" min="1990-01-01" max="2022-01-01" />
			<br>
			
			<label for="numtel"> Tel </label>
			<input type="text" name="numtel" id="numtel" placeholder="Numereau de téléphone avec 8 chiffres" pattern="[0-9]{8}"/>
			<br>
			<br>
		
		</fieldset>
		
		<fieldset id="format">
			<legend> <h4>  Necessité du Compte </h4> </legend>
			
			<label for="Adressmail"> Email* </label>
			<input type="text" name="Adressmail" id="Adressmail" required />
			<br>
			
			<label for="password"> Mot de Passe* </label>
			<input type="password" name="password" id="password" required />
			<br>
			
			<label for="passwordconfirmation"> Confirmation du Mot de Passe* </label>
			<input type="password" name="passwordconfirmation" id="passwordconfirmation" required />
			<br>
			<br>
			
		</fieldset>
	

	<p>	
		<input type="submit" value="Créer mon Compte" />
		<input type="reset" value="Effacer" />
	</p>	

	</fieldset>
</form>

<header localisation="index.php?controller=client&action=created">