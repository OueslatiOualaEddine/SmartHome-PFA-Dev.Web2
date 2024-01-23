
	<h2 class="titreobj">Passer une Panier</h2>
	      <p> Pour Panierr Xiaomi Viomie Cleaner S9 , veuiller remplir le formulaire suivant : </p>


<form   style=" width: 55vw; margin-left : 17vw;" name="form2" method="post" action="index.php?controller=client&action=ordred" >
	<fieldset id="format"> 
        <details open>
			<summary> Nettoyage Automatique </summary>
			<fieldset id="format" class="detail" >
				<details open >
					<summary> Xiaomi </summary>
					<fieldset id="format" >
				        <p>
				        Modéle : Viomie Cleaner S9  <br> Prix : 1219 TND <br> 
                        Quantité Désiré :
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

                        <a href='index.php?controller=Panier&action=ordred'> Valider </a>
                        </p>
                    </fieldset>
                </details>
			</fieldset>
		</details>
    </fieldset>
</form>
