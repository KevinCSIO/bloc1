<?php
include_once "src/gui.php";
titre("Niveau 1");
titre("Teste de niveau 2",2);

$message="Bonjour";
echo $message;
?>
<?=titre($message,6)?>
