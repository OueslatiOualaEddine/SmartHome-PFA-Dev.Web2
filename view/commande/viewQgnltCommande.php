
	<h2 class="titreobj">Passer une Commande</h2>
	      <p> Pour commander Google Nest learning Thermostat , veuiller remplir le formulaire suivant : </p>


<form   style=" width: 55vw; margin-left : 17vw;" name="form2" method="post" action="index.php?controller=client&action=ordred" >
	<fieldset id="format"> 
        <details open>
			<summary> Réglage de la Température </summary>
			<fieldset id="format" class="detail">
                <details open >
                    <summary> Google </summary>
                    <fieldset id="format" >
                        <p>
                        Modéle : Nest learning Thermostat <br> Prix : 499 TND <br> 
                        Quantité Désiré :<br>
                        <progress id="avancement" value="1" max="5"></progress>
                        <span id="number"></span>
                        <button type="button" onclick="modif(-1);">-</button>
                        <button type="button" onclick="modif(1);">+</button>
                        <script>
                        function avancement() {
                        var ava = document.getElementById("avancement");
                        var prc = document.getElementById("number");
                        prc.innerHTML = ava.value ; }
                        avancement(); 
                        function modif(val) {
                        var ava = document.getElementById("avancement");
                        if((parseInt(ava.value)+val)<=ava.max && 
                        (parseInt(ava.value)+val)>=0) {
                        ava.value += val; }
                        avancement();
                        }
                        </script> 
                        <br><br>
                        <a href='index.php?controller=commande&action=ordred'> Valider </a>
                        </p>
                    </fieldset>
                </details>
			</fieldset>
		</details>
    </fieldset>
</form>
