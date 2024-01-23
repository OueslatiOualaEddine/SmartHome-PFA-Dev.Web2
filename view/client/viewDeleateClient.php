
<form name="form3" method="post" action="index.php?controller=client&action=deleted&ncin=<?=$ncin?>" >
    <fieldset id="format" class="Connexion">
		<legend> <h3>  Verifier votre Demande </h3> </legend> 
        <label for="del"> Êtes-vous sûr de Supprimer votre Compte </label>
        <select name="civilité" id="Genre" >
            <option value="NON" selected > NON </option>
            <option value="YES" > YES </option>
        </select>
        </br>
    </fieldset>
</form>