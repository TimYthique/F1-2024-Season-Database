<div class="team">
    <img class="logo-team" src="<?= $team['logo']; ?>" alt="<?= $team['name'] . " Logo" ?>">
    <div class="vertical-bar"></div>
    <div>
        <img class="livery-team" src="<?= $team['livery']; ?>" alt="<?= $team['name'] . " Livery" ?>">
        <p>Directeur : <?php uppercase($team['director']) ?></p>
        <p>Pilote 1 : <?php uppercase($team['driver1']) ?></p>
        <p>Pilote 2 : <?php uppercase($team['driver2']) ?></p>
    </div>
</div>
<div class="horizontal-bar"></div>
<div class="drivers-heads-buttons">
    <?php foreach ($drivers as $driver): ?>
        <div id="driver-<?= $driver['name']; ?>" class="driver-circled" onclick="showDriverStats( )">
            <img src="<?= $driver['photo']; ?>" alt="<?= $driver['firstname'] . ' ' . $driver['name']; ?>" class="driver-circled-image">
            <div class="driver-circled-overlay">
                <div class="driver-circled-text"><?= ucwords($driver['firstname']) . ' ' . mb_strtoupper($driver['name']); ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div id="driver-stats" style="display: none;">
    <?php require_once(__DIR__ . '/table.php'); ?>
</div>