<?php

require_once("../yaml/yaml_biblio/yaml.php");
$data=yaml_parse_file('../yaml/accueil.yaml');
//print_array($data);

echo "<h1>".$data["titre"]."</h1>\n";
foreach($data["accueil"] AS $accueil){
	echo "<p>".ucfirst($accueil["age"])." ".$accueil["metier"]." ".$accueil["formation actuelle"]." ".$accueil["permis"]." ".$accueil["vehicule"]."</p>\n";
}


?>