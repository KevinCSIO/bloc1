<?php
include_once "src/gui.php";
titre("Niveau 1");
titre("Teste de niveau 2",2);
?>
<form method="post">
    <input name="message" placeholder="Votre message">
</form>
<?php
$message=post('message','pas de msg');
echo $message;
?>
<?=titre($message,6)?>
