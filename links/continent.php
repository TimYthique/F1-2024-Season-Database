<h1 class="info-title" style="margin-top: 5%; margin-bottom: 2.5%;">Veuillez séléctionner une course pour continuer</h1>
<?php foreach ($continents as $continent): ?>
    <div class="continent-container">
        <?php if ($_GET['continent'] === $continent['name']) {
            $racesOfContinent = getRacesByContinent($continent['name'], $races);
            foreach ($racesOfContinent as $raceOfContinent): ?>
                <!-- Rappeler, dans l'url, le continent correspondant, du type : ?continent=europe&race=allemagne   (fait) -->
                <a href="index2.php?continent=<?= $continent['name']; ?>&race=<?= $raceOfContinent['race_name'] ?>">
                    <div class="race-square">
                        <img src="<?= $raceOfContinent['flag']; ?>" class="race-square-image">
                        <div class="race-square-overlay">
                            <div class="race-name"><?= ucfirst($raceOfContinent['race_name']); ?></div>
                        </div>
                    </div>
                </a>
            <?php endforeach;
        } ?>
    </div>
<?php endforeach;
?>