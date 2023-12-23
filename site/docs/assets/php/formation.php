<?php
$data = yaml_parse_file("assets/yaml/formation.yaml");
?>

<section class="formation" id="formation">
    <div class="titre_form">
    <?php    
    echo '<h2 class="titre10">'.($data["title"]).'<h2>';?>
    </div>
    <div class="form1">
        <?php
        echo '<p>'.($data["formation"]).' : '.($data["formation2"]).'<br><br>'.($data["etablissement"]).' : '.($data["etablissement2"]).'<br><br>'.($data["lieu"]).' : '.($data["lieu2"]).'<br><br>'.($data["periode"]).' : '.($data["periode2"]).'</p>';?>
    </div>
    <hr class="hr2"/>
    <div class="form2">
        <?php
        echo '<p>'.($data["formation"]).' : '.($data["formation3"]).'<br><br>'.($data["etablissement"]).' : '.($data["etablissement2"]).'<br><br>'.($data["lieu"]).' : '.($data["lieu2"]).'<br><br>'.($data["periode"]).' : '.($data["periode2"]).'</p>';?>
    </div>
    <hr class="hr2"/>
    <div class="form3">
        <?php
        echo '<p>'.($data["formation"]).' : '.($data["formation4"]).'<br><br>'.($data["etablissement"]).' : '.($data["etablissement3"]).'<br><br>'.($data["lieu"]).' : '.($data["lieu3"]).'<br><br>'.($data["periode"]).' : '.($data["periode3"]).'</p>';?>
    </div>
</section>