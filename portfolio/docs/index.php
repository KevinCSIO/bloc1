<?php
require_once("yaml/yaml.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Portfolio - CAMUS Kévin</title>
</head>
<body>
    <div class="header">
        <h1 class="titre1">Kévin CAMUS<br>PORTFOLIO</h1>
            <nav>
                <a href="#accueil">Accueil</a>
                <a href="#apropos">À Propos</a>
                <a href="#competences">Compétences</a>
                <a href="#experience">Expérience</a>
                <a href="#formation">Formation</a>
                <a href="#contact">Contact</a>
                <a href="https://www.linkedin.com/in/k%C3%A9vin-camus-2577a4261/?originalSubdomain=fr" target="_blank" id="linkedin-logo"><img src="assets/images/LinkedIn_logo.avif" alt="Logo LinkedIn"></a>
            </nav>
    </div>
    
        <?php
        require("assets/php/accueil.php");?>
        <?php
        require("assets/php/a_propos.php");?>
        <?php
        require("assets/php/competences.php");?>
        <?php
        require("assets/php/experiences.php");?>
        <?php
        require("assets/php/formation.php");?>
        <?php
        require("assets/php/contact.php");?>

</body>
</html>

