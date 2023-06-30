<?php
setcookie('nom_utilisateur', 'NouveauNom', time() + 3600);

   
header('Location: ./index.php');
exit;
?>