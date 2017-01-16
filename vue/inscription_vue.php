<?php
?>
<div id="div_inscription">
    <form onsubmit="submitForm(this)">
	<div id="formH">
		<label for="login">Login (mail) :</label>
                <input type="email" id="login"/>
		<br/>
		<label for="password">Mot de passe :</label>
                <input type="password" id="password"/>	
                <br/>
	</div>
        <br/>
	<div id="formB">	
		<label for="nom">Nom :</label>
		<input type="text" id="nom"/>
                <label for="nom">Prénom :</label>
		<input type="text" id="nom"/>
		<br/>
		<label for="dateNaiss">Date de naissance :</label>
		<input type="date" id="dateNaiss"/>
                <label for="tel">tel :</label>
		<input type="tel" id="tel"/>
		<br/>
	</div>
	
</form>
</div>
