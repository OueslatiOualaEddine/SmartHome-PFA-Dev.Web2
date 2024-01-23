


<form   style=" width: 50vw; margin-left : 20vw;  "  name="form" method="post" action="index.php?controller=client&action=entred&ncin=<?=$ncin?>" >
    <fieldset style="text-align: center;" id="format" class="Connexion">
        <legend> <h3>  Se Connecter  </h3> </legend>

        <label for="username"> N° CIN </label>
        <input type="text" name="username" id="username" size="40" maxlength="30" required autofocus />
        <br>

        <label for="username"> Adresse E-mail </label>
        <input type="text" name="username" id="username" size="40" maxlength="30" required autofocus />
        <br>
        
        <label for="password">  Mot de Passe </label>
        <input type="password" name="password" id="password" size="30" maxlength="30" required />
        <br>
        <br>
                        
        <input type="submit" value="Se Connecter"  />
        <input type="reset" value="Annuler" />

        <br>
        <br>

<p> Nouveau ?  Vous n'avez pas un Compte ? <br>
<a href='index.php?controller=client&action=create'> Créer votre Compte Maintenant  </a>  </p>
        
    </fieldset>
</form>



