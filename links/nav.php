<div class="navbar">
    <a href="index2.php"><img class="navbar-logo" src="images/navbar/F1 Logo Blanc.png" alt="F1 Logo"></a>
    <div class="navbar-dropdown">
    <button class="navbar-button">COURSES</button>
    <div class="navbar-dropdown-content">
        <?php foreach($continents as $continent): ?>
            <a href="index2.php?continent=<?= $continent['name'] ?>"><?= mb_strtoupper($continent['name']); ?><img src="<?= $continent['image'] ?>" alt="" class="navbar-dropdown-races-icon"></a>
        <?php endforeach; ?>
    </div>
    </div>
    <div class="navbar-dropdown">
    <button class="navbar-button">ÉCURIES</button>
    <div class="navbar-dropdown-content">
        <?php foreach($teams as $team): ?>
            <a href="index2.php?team=<?= $team['name'] ?>"><?= mb_strtoupper($team['name']); ?><img src="<?= $team['logo'] ?>" alt="" class="navbar-dropdown-teams-icon"></a>
        <?php endforeach; ?>
    </div>
    </div>
    <div class="navbar-dropdown">
    <button class="navbar-button">CHAMPIONNATS</button>
    <div class="navbar-dropdown-content">
        <?php foreach($championships as $championship): ?>
            <a href="index2.php?championship=<?= $championship['name'] ?>"><?= mb_strtoupper($championship['name']); ?><img src="<?= $championship['image'] ?>" alt="" class="navbar-dropdown-championships-icon"></a>
        <?php endforeach; ?>
    </div>
    </div>
    <div>
        <a class="navbar-button navbar-signin" href="index2.php?showLogin=true">Se connecter</a>
        <a class="navbar-button navbar-signup" href="#">S'enregistrer</a>
    </div>
</div>