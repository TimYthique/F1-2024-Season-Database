<!-- Datas -->
<?php require_once(__DIR__ . '/links/datas.php'); ?>
<!-- Functions -->
<?php require_once(__DIR__ . '/links/functions.php'); ?>

<!-- Header -->
<?php require_once(__DIR__ . '/links/header.php'); ?>

<!-- NavBar -->
<?php require_once(__DIR__ . '/links/nav.php'); ?>

<!-- Login -->
<?php
$getData = $_POST;

if (isset($getData['email']) 
    && isset($getData['password'])){
        $emailData    = filter_var($getData['email'], FILTER_VALIDATE_EMAIL);
        $passwordData = strip_tags($getData['password']);
}

$isConnected = false;

$allowedUser = [
    "email"   => "timeobinaud@gmail.com",
    "password"=> "abcd"
];

if (isset($getData['email']) 
    && isset($getData['password'])
    && $emailData === $allowedUser['email'] 
    && $passwordData === $allowedUser['password']) {
        $isConnected = true;
        echo "Connexion réussie !";
} else if (isset($getData['email']) 
&& isset($getData['password'])) {
    echo "La connexion a échoué. Veuillez réessayer.";
    require_once(__DIR__ . '/links/login.php');
}
?>

<?php if (!$isConnected) { ?>
    <h1 id="h1Tag" class="info-title" style="margin-top: 20%;">Veuillez vous connecter pour continuer.</h1>
    <?php if (isset($_GET['showLogin']) && $_GET['showLogin'] === "true") { ?>
        <?php require_once(__DIR__ . '/links/login.php');
        }
} else {
    if (!$at_least_one) { ?>
        <h1 class="info-title" style="margin-top: 20%;">Veuillez séléctionner un élément à afficher depuis la barre de navigation pour continuer</h1>
    <?php } else {
        foreach($continents as $continent):
            if (isset($_GET['continent']) && $_GET['continent'] === $continent['name']) {
                // Continent Race Choice
                require_once(__DIR__ . '/links/continent.php');
            }
        endforeach;
        foreach($teams as $team):
            if (isset($_GET['team']) && $_GET['team'] === $team['name']) {
                // Team
                require_once(__DIR__ . '/links/team.php');
            }
        endforeach;
        foreach($championships as $championship):
            if (isset($_GET['championship']) && $_GET['championship'] === $championship['name']) {
                // Championship
                require_once(__DIR__ . '/links/championship.php');
            }
        endforeach;
        foreach ($races as $race):
            if (isset($_GET['race']) && $_GET['race'] === $race['race_name']) {
                // Race
                require_once(__DIR__ . '/links/race.php');
            }
        endforeach;
    }
} ?>


<!-- Footer -->
<?php require_once(__DIR__ . '/links/footer.php'); ?>