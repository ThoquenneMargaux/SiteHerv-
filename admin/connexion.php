<?php


include("headAdmin.php");



?>
<body>
<section id="connexion">

<p class="pMDP">Connexion </p>
    <form class="formConnexion" action="acceuilAdmin.php">
    Login :<br>
    <input type="text" name="firstname" class="inputMDP">
    <br>
    Mot de passe :<br>
    <input type="text" name="lastname" class="inputMDP">
   
    <br><br>
    <input type="submit" value="Connexion" class="submitConnexion">
    </form> 
</section>
<script src="appAdmin.js"/>
</body>
</html>