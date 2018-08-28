<?php


include("headAdmin.php");
include("navAdmin.php");



?>
<body>
<script src="//cdn.tinymce.com/4/tinymce.min.js "></script>
<script>tinymce.init({ selector:'#description' , menubar: false , entity_encoding : "raw" }) ;</script>


<section id="modifText">

<p class="pmodifText">Changement de mot de passe </p>
    <form class="formText">
    <textarea name="description" id="description" class="textareaTexte" rows ="3" placeholder="Description" >
         Text repris du site

    </textarea>
    <br><br>
    <input type="submit" value="Valider" class="submitText">
    </form> 
</section>
<script src="appAdmin.js"/>
</body>
</html>
