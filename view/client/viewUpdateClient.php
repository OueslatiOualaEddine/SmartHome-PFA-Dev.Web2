<?php
$ncin=$up->getNcin();
?>
<form method="POST" action="index.php?controller=client&action=updated&ncin=<?=$ncin?>">
    <details open >
        <summary> Information Personelle </summary>
            <fieldset id="format">
                <legend> <h4>  Information Personelle </h4> </legend>
                    
                <label for="Nomation"> CIN </label>
                <input type="text" name="Nomation" id="Nomation" required />
                </br>

                <label for="Nomation"> Nom </label>
                <input type="text" name="Nomation" id="Nomation" required />
                </br>
                
                <label for="Prenomation"> Prenom </label>
                <input type="text" name="Prenomation" id="Prenomation" required />
                </br>
                
                <label for="Genre"> Genre </label>
                <select name="civilité" id="Genre" >
                    <option value="Monsieur" selected > M </option>
                    <option value="Madame" > Mme </option>
                    <option value="Madamoiselle" > Melle </option>
                </select>
                </br>
                
                <label for="naissance"> Date de Naissance </label>
                <input type="date" name="naissance" id="naissance" value="1992-01-01" min="1990-01-01" max="2000-01-01" />
                </br>
                
                <label for="numtel"> Tel </label>
                <input type="text" name="numtel" id="numtel" placeholder="Numereau de téléphone avec 8 chiffres" pattern="[0-9]{8}"/>
                </br>
            </fieldset>
    </details>

    <details open >
    <summary> Information Personelle </summary>
        <fieldset id="format">
            <legend> <h4>  Necessité du Compte </h4> </legend>
                
            <label for="Adressmail"> Email </label>
            <input type="text" name="Adressmail" id="Adressmail" required />
            </br>
            
            <label for="password"> Mot de Passe </label>
            <input type="text" name="password" id="password" required />
            </br>
            
            <label for="passwordconfirmation"> Confirmation du Mot de Passe </label>
            <input type="text" name="passwordconfirmation" id="passwordconfirmation" required />
            </br>
        </fieldset>
    </details>
</form>
