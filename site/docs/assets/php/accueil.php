<?php
$data = yaml_parse_file("assets/yaml/accueil.yaml");
?>

<section class="accueil" id="accueil">
    <div class="Part2">
        <div class="flexbox">
            <h2 class="titre2"><?= $data["title"] ?></h2>
            <img src="<?= $data["path1"] ?>" alt="Photo CV">
            <ul>
                <?php foreach ($data['info'] as $infoItem): ?>
                    <li>Nom : <?= $infoItem['Nom'] ?></li>
                    <li>Prénom : <?= $infoItem['Prenom'] ?></li>
                    <li>Age : <?= $infoItem['Age'] ?></li>
                    <li>Métier : <?= $infoItem['Metier'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="bienvenu">
            <h2 class="titre3"><?= $data["title2"] ?></h2>
            <p><?= $data["text1"] ?><br><?= $data["text2"] ?><br><?= $data["text3"] ?></p>
        </div>
    </div>
</section>