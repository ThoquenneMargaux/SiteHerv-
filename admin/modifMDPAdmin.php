<?php


include("headAdmin.php");
include("navAdmin.php");



?>
<body>
<section id="modifMDP">

<p class="pMDP">Changement de mot de passe </p>
    <form class="formMDP">
    Ancien mot de passe :<br>
    <input type="text" name="firstname" class="inputMDP">
    <br>
    Nouveau mot de passe :<br>
    <input type="text" name="lastname" class="inputMDP">
    <br>
    Répéter le nouveau mot de passe :<br>
    <input type="text" name="lastname" class="inputMDP">
    <br><br>
    <input type="submit" value="Valider" class="submitMDP">
    </form> 
</section>
<script src="appAdmin.js"/>
</body>
</html>