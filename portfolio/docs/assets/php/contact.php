<?php
$data = yaml_parse_file("assets/yaml/contact.yaml");
?>

<section class="contact" id="contact">
    <div class="titre_contc">
      <?php
      echo '<h2 class="titre11">'.($data["title"]).'</h2>';?>
    </div>
    <div class="contc">
        <form action="contact.php" method="post">
            <label for="name">Nom :</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Courriel :</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message :</label><br>
            <textarea id="message" name="message" required></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
</section>