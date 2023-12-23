<?php
$data = yaml_parse_file("assets/yaml/experiences.yaml");
?>

<section class="experience" id="experience">
        <div class="titre_exp">
            <?php
            echo '<h2 class="titre9">'.($data["title"]).'<h2>';?>
        </div>
        <div class="exp1">
            <?php
            echo '<p>'.($data["poste"]).' : '.($data["poste2"]).'<br><br>'.($data["entreprise"]).' : '.($data["entreprise2"]).'<br><br>'.($data["lieu"]).' : '.($data["lieu2"]).'<br><br>'.($data["periode"]).' : '.($data["periode2"]).'<br><br>'.($data["tache"]).' : '.'</p>';?>
            <?php
            foreach ($data['taches'] as $uneInfo):?>
            <li><?= $uneInfo['crea'] ?></li>
            <li><?= $uneInfo['obs'] ?></li>
            <?php endforeach; ?>
        </div>
        <hr class="hr1"/>
        <div class="exp2">
            <?php
            echo '<p>'.($data["poste"]).' : '.($data["poste3"]).'<br><br>'.($data["entreprise"]).' : '.($data["entreprise2"]).'<br><br>'.($data["lieu"]).' : '.($data["lieu2"]).'<br><br>'.($data["periode"]).' : '.($data["periode3"]).'<br><br>'.($data["tache"]).' : '.'</p>';?>
            <?php
            foreach ($data['taches2'] as $uneInfo):?>
            <li><?= $uneInfo['param'] ?></li>
            <li><?= $uneInfo['traite'] ?></li>
            <li><?= $uneInfo['crea2'] ?></li>
            <li><?= $uneInfo['crea3'] ?></li>
            <li><?= $uneInfo['dev'] ?></li>
            <?php endforeach; ?>
        </div>
        </section>