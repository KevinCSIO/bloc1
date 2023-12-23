<?php
$data=yaml_parse_file("assets/yaml/a_propos.yaml");?>

<section class="apropos" id="apropos">
    <div class="fond">
        <?php
        echo '<img class="img1" src="'.($data["path1"]).'" alt="Code">';
        echo '<img class="img2" src="'.($data["path1"]).'" alt="Code">';
        echo '<img class="img3" src="'.($data["path1"]).'" alt="Code">';
        echo '<img class="img4" src="'.($data["path1"]).'" alt="Code">';
        echo '<img class="img5" src="'.($data["path1"]).'" alt="Code">';?>
    </div>
    <div class="titre_apropos">
    <?php
    echo '<h2 class="titre4">'.($data["title"]).'</h2>';?>
    </div>
    <div class="text">
        <?php
        echo '<p>'.($data["text1"]).'<br>'.($data["text2"]).'<br>'.($data["text3"]).'<br>'.($data["text4"]).'<br>'.($data["text5"]).'</p>';?>
    </div>
</section>
