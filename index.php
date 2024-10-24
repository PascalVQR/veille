<?php

$stuffToWatch = [
    ["Babylon.js", "Moteur de développement de jeu avec une interface JavaScript", "https://github.com/BabylonJS/Babylon.js"],
    ["formBuilder", "Un plugin pour créer un formulaire en glissant/déposant des éléments", "https://github.com/kevinchappell/formBuilder"],
    ["Phaser", "Framework de développement de jeu vidéo en JS", "https://github.com/phaserjs/phaser"],
    ["Flo", "C'est une camarade de classe", "https://github.com/floryannepuech"]
];

$card = "";

foreach($stuffToWatch as $tool) {
    $card .= "<article class='card'>
        <h2>$tool[0]</h2>
        <p>$tool[1]</p>
        <a href='$tool[2]' target='_blank'>github ↗️</a>
    </article>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Veille</title>
</head>
<body>
    <h1>Veille</h1>
    <section class="grid">
        <?php echo $card ?>
    </section>
</body>
<script src="script.js"></script>
</html>