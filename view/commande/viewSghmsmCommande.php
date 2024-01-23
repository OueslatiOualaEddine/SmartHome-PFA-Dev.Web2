
	<h2 class="titreobj">Passer une Commande</h2>
	      <p> Pour commander Google Home Service  , veuiller remplir le formulaire suivant : </p>


<form   style=" width: 55vw; margin-left : 17vw;" name="form2" method="post" action="index.php?controller=client&action=ordred" >
	<fieldset id="format"> 
        <details open >
			<summary> Etablir un Assistant Virtuel pour le Contôle Vocal </summary>
			<fieldset id="format" class="detail">
				<details open >
					<summary> Google </summary>
					<fieldset id="format">
						<details open>
							<summary> Home </summary>
							<fieldset id="format">
                            <p>
                            <input type="checkbox" id="d1"/><label for="d1"> Home mini -----------> Prix : 119 TND </label><br> 
                            <input type="checkbox" id="d2"/><label for="d2"> Home simple -----------> Prix : 269 TND </label><br> 
                            <input type="checkbox" id="d3"/><label for="d3"> Home max -----------> Prix : 599 TND </label><br> 
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
                        </details>
                    </fieldset>
                </details>
			</fieldset>
		</details>
    </fieldset>
</form>
