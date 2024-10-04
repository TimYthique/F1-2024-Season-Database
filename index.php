<!-- Séparer le code dans différents fichiers -->
<!-- Faire des copier coller - ne rien supprimer de ce fichier  (fait) -->
<!-- Créer un nouveau fichier vide "index2.php" (fait) -->

<!-- "datas.php" pour tout ce qui est données   (fait) -->
<!-- "header.php" pour l'entête (fait) -->
<!-- "nav.php' pour la navigation (bandeau du haut) (fait) -->
<!-- "footer.php" pour le pied de page  (footer)    (fait) -->
<!-- "team.php" pour la partie écurie   (fait) -->
<!-- "race.php" pour la partie course (individuelle)    (fait) -->

<?php
$continents = ['amérique', 'asie', 'europe', 'océanie'];

$teams = [
    [
        'name' => 'redbull',
        'fullname' => 'oracle red bull racing',
        'logo' => 'images/logos/Red Bull Logo.png',
        'livery' => 'images/liveries/Red Bull Livery.png',
        'director' => 'christian horner',
        'driver1' => 'max verstappen',
        'driver1head' => 'images/drivers/Max Verstappen.png',
        'driver2' => 'sergio pérez',
        'driver2head' => 'images/drivers/Sergio Pérez.png',
    ],
    [
        'name' => 'mercedes',
        'full_name' => 'mercedes-amg petronas f1 team',
        'logo' => 'images/logos/Mercedes Logo.png',
        'livery' => 'images/liveries/Mercedes Livery.png',
        'director' => 'toto wolff',
        'driver1' => 'lewis hamilton',
        'driver1head' => 'images/drivers/Lewis Hamilton.png',
        'driver2' => 'george russell',
        'driver2head' => 'images/drivers/George Russell.png',
    ],
    [
        'name' => 'ferrari',
        'full_name' => 'scuderia ferrari',
        'logo' => 'images/logos/Ferrari Logo.png',
        'livery' => 'images/liveries/Ferrari Livery.png',
        'director' => 'frédéric vasseur',
        'driver1' => 'charles leclerc',
        'driver1head' => 'images/drivers/Charles Leclerc.png',
        'driver2' => 'carlos sainz jr',
        'driver2head' => 'images/drivers/Carlos Sainz Jr.png',
    ],
    [
        'name' => 'mclaren',
        'full_name' => 'mclaren formula 1 team',
        'logo' => 'images/logos/McLaren Logo.png',
        'livery' => 'images/liveries/McLaren Livery.png',
        'director' => 'andrea stella',
        'driver1' => 'lando norris',
        'driver1head' => 'images/drivers/Lando Norris.png',
        'driver2' => 'oscar piastri',
        'driver2head' => 'images/drivers/Oscar Piastri.png',
    ],
    [
        'name' => 'astonmartin',
        'full_name' => 'aston martin aramco f1 team',
        'logo' => 'images/logos/Aston Martin Logo.png',
        'livery' => 'images/liveries/Aston Martin Livery.png',
        'director' => 'mike krack',
        'driver1' => 'fernando alonso',
        'driver1head' => 'images/drivers/Fernando Alonso.png',
        'driver2' => 'lance stroll',
        'driver2head' => 'images/drivers/Lance Stroll.png',
    ],
    [
        'name' => 'alpine',
        'full_name' => 'bwt alpine f1 team',
        'logo' => 'images/logos/Alpine Logo.png',
        'livery' => 'images/liveries/Alpine Livery.png',
        'director' => 'bruno famin',
        'driver1' => 'pierre gasly',
        'driver1head' => 'images/drivers/Pierre Gasly.png',
        'driver2' => 'esteban ocon',
        'driver2head' => 'images/drivers/Esteban Ocon.png',
    ],
    [
        'name' => 'williams',
        'full_name' => 'williams racing',
        'logo' => 'images/logos/Williams Logo.png',
        'livery' => 'images/liveries/Williams Livery.png',
        'director' => 'james vowles',
        'driver1' => 'alexander albon',
        'driver1head' => 'images/drivers/Alexander Albon.png',
        'driver2' => 'logan sargeant',
        'driver2head' => 'images/drivers/Logan Sargeant.png',
    ],
    [
        'name' => 'rb',
        'full_name' => 'visa cash app rb formula one team',
        'logo' => 'images/logos/Racing Bulls Logo.png',
        'livery' => 'images/liveries/Racing Bulls Livery.png',
        'director' => 'laurent mekies',
        'driver1' => 'yuki tsunoda',
        'driver1head' => 'images/drivers/Yuki Tsunoda.png',
        'driver2' => 'daniel ricciardo',
        'driver2head' => 'images/drivers/Daniel Ricciardo.png',
    ],
    [
        'name' => 'kick',
        'full_name' => 'stake f1 team kick sauber',
        'logo' => 'images/logos/Kick Logo.png',
        'livery' => 'images/liveries/Kick Livery.png',
        'director' => 'alessandro alunni bravi',
        'driver1' => 'valtteri bottas',
        'driver1head' => 'images/drivers/Valtteri Bottas.png',
        'driver2' => 'guanyu zhou',
        'driver2head' => 'images/drivers/Guanyu Zhou.png',
    ],
    [
        'name' => 'haas',
        'full_name' => 'moneygram haas f1 team',
        'logo' => 'images/logos/Haas Logo.png',
        'livery' => 'images/liveries/Haas Livery.png',
        'director' => 'ayao komatsu',
        'driver1' => 'nico hulkenberg',
        'driver1head' => 'images/drivers/Nico Hulkenberg.png',
        'driver2' => 'kevin magnussen',
        'driver2head' => 'images/drivers/Kevin Magnussen.png',
    ],
];

$championships = ['pilote', 'constructeur'];

$races = [
    [
        'race_name' => 'bahreïn',
        'flag' => 'images/flags/Drapeau Bahreïn.png',
    ],
    [
        'race_name' => 'arabie saoudite',
        'flag' => 'images/flags/Drapeau Arabie Saoudite.png',
    ],
    [
        'race_name' => 'australie',
        'flag' => 'images/flags/Drapeau Australie.png',
    ],
    [
        'race_name' => 'japon',
        'flag' => 'images/flags/Drapeau Japon.png',
    ],
    [
        'race_name' => 'chine',
        'flag' => 'images/flags/Drapeau Chine.png',
    ],
    [
        'race_name' => 'miami',
        'flag' => 'images/flags/Drapeau Etats Unis.png',
    ],
    [
        'race_name' => 'émilie-romagne',
        'flag' => 'images/flags/Drapeau Italie.png',
    ],
    [
        'race_name' => 'monaco',
        'flag' => 'images/flags/Drapeau Monaco.png',
    ],
    [
        'race_name' => 'canada',
        'flag' => 'images/flags/Drapeau Canada.png',
    ],
    [
        'race_name' => 'espagne',
        'flag' => 'images/flags/Drapeau Espagne.png',
    ],
    [
        'race_name' => 'autriche',
        'flag' => 'images/flags/Drapeau Autriche.png',
    ],
    [
        'race_name' => 'grande-bretagne',
        'flag' => 'images/flags/Drapeau Grande Bretagne.png',
    ],
    [
        'race_name' => 'hongrie',
        'flag' => 'images/flags/Drapeau Hongrie.png',
    ],
    [
        'race_name' => 'belgique',
        'flag' => 'images/flags/Drapeau Belgique.png',
    ],
    [
        'race_name' => 'pays-bas',
        'flag' => 'images/flags/Drapeau Pays Bas.png',
    ],
    [
        'race_name' => 'italie',
        'flag' => 'images/flags/Drapeau Italie.png',
    ],
    [
        'race_name' => 'azerbaïdjan',
        'flag' => 'images/flags/Drapeau Azerbaïdjan.png',
    ],
    [
        'race_name' => 'singapour',
        'flag' => 'images/flags/Drapeau Singapour.png',
    ],
    [
        'race_name' => 'états-unis',
        'flag' => 'images/flags/Drapeau Etats Unis.png',
    ],
    [
        'race_name' => 'mexique',
        'flag' => 'images/flags/Drapeau Mexique.png',
    ],
    [
        'race_name' => 'brésil',
        'flag' => 'images/flags/Drapeau Brésil.png',
    ],
    [
        'race_name' => 'las vegas',
        'flag' => 'images/flags/Drapeau Etats Unis.png',
    ],
    [
        'race_name' => 'qatar',
        'flag' => 'images/flags/Drapeau Qatar.png',
    ],
    [
        'race_name' => 'abou dabi',
        'flag' => 'images/flags/Drapeau Emirats Arabes Unis.png',
    ],
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Bull</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon/F1 Logo Rouge.ico">
</head>
<body>
    <div class="navbar">
        <a href="index.html"><img class="navbar-logo" src="images/navbar/F1 Logo Blanc.png" alt="F1 Logo"></a>
        <div class="navbar-dropdown">
        <button class="navbar-button">COURSES</button>
        <div class="navbar-dropdown-content">
            <?php foreach($continents as $continent): ?>
                <a href="#" class="navbar-dropdown-races-icon"><?= mb_strtoupper($continent); ?></a>
            <?php endforeach; ?>
        </div>
        </div>
        <div class="navbar-dropdown">
        <button class="navbar-button">ÉCURIES</button>
        <div class="navbar-dropdown-content">
            <?php foreach($teams as $team): ?>
                <a href="#" class="navbar-dropdown-teams-icon"><?= mb_strtoupper($team['name']); ?></a>
            <?php endforeach; ?>
        </div>
        </div>
        <div class="navbar-dropdown">
        <button class="navbar-button">CHAMPIONNATS</button>
        <div class="navbar-dropdown-content">
            <?php foreach($championships as $championship): ?>
                <a href="#" class="navbar-dropdown-championships-icon"><?= mb_strtoupper($championship); ?></a>
            <?php endforeach; ?>
        </div>
        </div>
        <div>
            <a class="navbar-button navbar-signin" href="#">Se connecter</a>
            <a class="navbar-button navbar-signup" href="#">S'enregistrer</a>
        </div>
    </div>
    <!-- Contenu Dynamic -->
    <div class="team">
        <img class="logo-team" src="<?= $teams[0]['logo']; ?>" alt="Red Bull Logo">
        <div class="vertical-bar"></div>
        <div>
            <img class="livery-team" src="<?= $teams[0]['livery']; ?>" alt="Red Bull Livery">
            <p>Directeur : <?php $words = explode(' ', $teams[0]['director']); echo ucwords($words[0]) . ' ' . mb_strtoupper($words[1]); ?></p>
            <p>Pilote 1 : <?php $words = explode(' ', $teams[0]['driver1']); echo ucwords($words[0]) . ' ' . mb_strtoupper($words[1]); ?></p>
            <p>Pilote 2 : <?php $words = explode(' ', $teams[0]['driver2']); echo ucwords($words[0]) . ' ' . mb_strtoupper($words[1]); ?></p>
        </div>
    </div>
    <div class="horizontal-bar"></div>
    <table>
        <thead>
            <tr>
                <th>COURSE</th>
                <th>POSITION</th>
                <th>TEMPS</th>
                <th>MEILLEUR TOUR</th>
                <th>POINTS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($races as $race): ?>
                <tr>
                    <td>
                        <img src="<?= $race['flag']; ?>" alt="" class="race-flag">
                        <?= mb_strtoupper($race['race_name']); ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>





    <!-- Contenu Static -->
    <div class="team">
        <img class="logo-team" src="images/logos/Red Bull Logo.png" alt="Red Bull Logo">
        <div class="vertical-bar"></div>
        <div>
            <img class="livery-team" src="images/liveries/Red Bull Livery.png" alt="Red Bull Livery">
            <p>Directeur : Christian HORNER</p>
            <p>Pilote 1 : Max VERSTAPPEN</p>
            <p>Pilote 2 : Sergio PÉREZ</p>
        </div>
    </div>
    <div class="horizontal-bar"></div>
    <div class="drivers-heads-buttons"> 
        <div class="driver-circled" onclick="showDriver1Div()">
            <img src="images/drivers/Max Verstappen.png" alt="Max Verstappen" class="driver-circled-image">
            <div class="driver-circled-overlay">
                <div class="driver-circled-text">Max VERSTAPPEN</div>
            </div>
        </div>
        <div class="driver-circled" onclick="showDriver2Div()">
            <img src="images/drivers/Sergio Pérez.png" alt="Sergio Pérez" class="driver-circled-image">
            <div class="driver-circled-overlay">
                <div class="driver-circled-text">Sergio PÉREZ</div>
            </div>
        </div>
    </div>
    <div id="driver1-statistics" class="driver-statistics-div">
        <table>
            <thead>
                <tr>
                    <th>COURSE</th>
                    <th>POSITION</th>
                    <th>TEMPS</th>
                    <th>MEILLEUR TOUR</th>
                    <th>POINTS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="images/flags/Drapeau Bahreïn.png" alt="Drapeau Bahreïn" class="race-flag">BAHREÏN</td>
                    <td>1er</td>
                    <td>1:31:44:742</td>
                    <td class="best-lap">1:32:602</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Arabie Saoudite.png" alt="Drapeau Arabie Saoudite" class="race-flag">ARABIE SAOUDITE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Australie.png" alt="Drapeau Australie" class="race-flag">AUSTRALIE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Japon.png" alt="Drapeau Japon" class="race-flag">JAPON</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Chine.png" alt="Drapeau Chine" class="race-flag">CHINE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Etats Unis.png" alt="Drapeau Etats Unis" class="race-flag">MIAMI</td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Italie.png" alt="Drapeau Italie" class="race-flag">ÉMILIE-ROMAGNE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Monaco.png" alt="Drapeau Monaco" class="race-flag">MONACO</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Canada.png" alt="Drapeau Canada" class="race-flag">CANADA</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Espagne.png" alt="Drapeau Espagne" class="race-flag">ESPAGNE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Autriche.png" alt="Drapeau Autriche" class="race-flag">AUTRICHE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Grande Bretagne.png" alt="Drapeau Grande Bretagne" class="race-flag">GRANDE-BRETAGNE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Hongrie.png" alt="Drapeau Hongrie" class="race-flag">HONGRIE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Belgique.png" alt="Drapeau Belgique" class="race-flag">BELGIQUE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Pays Bas.png" alt="Drapeau Pays Bas" class="race-flag">PAYS-BAS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Italie.png" alt="Drapeau Italie" class="race-flag">ITALIE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Azerbaïdjan.png" alt="Drapeau Azerbaïdjan" class="race-flag">AZRBAÏDJAN</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Singapour.png" alt="Drapeau Singapour" class="race-flag">SINGAPOUR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Etats Unis.png" alt="Drapeau Etats Unis" class="race-flag">ÉTATS-UNIS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Mexique.png" alt="Drapeau Mexique" class="race-flag">MEXIQUE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Brésil.png" alt="Drapeau Brésil" class="race-flag">BRÉSIL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Etats Unis.png" alt="Drapeau Etats Unis" class="race-flag">LAS VEGAS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Qatar.png" alt="Drapeau Qatar" class="race-flag">QATAR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Emirats Arabes Unis.png" alt="Drapeau Emirats Arabes Unis" class="race-flag">ABOU DABI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="driver2-statistics" class="driver-statistics-div">
        <table>
            <thead>
                <tr>
                    <th>COURSE</th>
                    <th>POSITION</th>
                    <th>TEMPS</th>
                    <th>MEILLEUR TOUR</th>
                    <th>POINTS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="images/flags/Drapeau Bahreïn.png" alt="Drapeau Bahreïn" class="race-flag">BAHREÏN</td>
                    <td>2ème</td>
                    <td>1:32:07:199</td>
                    <td>❌</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Arabie Saoudite.png" alt="Drapeau Arabie Saoudite" class="race-flag">ARABIE SAOUDITE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Australie.png" alt="Drapeau Australie" class="race-flag">AUSTRALIE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Japon.png" alt="Drapeau Japon" class="race-flag">JAPON</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Chine.png" alt="Drapeau Chine" class="race-flag">CHINE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/flags/Drapeau Etats Unis.png" alt="Drapeau Etats Unis" class="race-flag">MIAMI</td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Italie.png" alt="Drapeau Italie" class="race-flag">ÉMILIE-ROMAGNE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Monaco.png" alt="Drapeau Monaco" class="race-flag">MONACO</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Canada.png" alt="Drapeau Canada" class="race-flag">CANADA</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Espagne.png" alt="Drapeau Espagne" class="race-flag">ESPAGNE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Autriche.png" alt="Drapeau Autriche" class="race-flag">AUTRICHE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Grande Bretagne.png" alt="Drapeau Grande Bretagne" class="race-flag">GRANDE-BRETAGNE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Hongrie.png" alt="Drapeau Hongrie" class="race-flag">HONGRIE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Belgique.png" alt="Drapeau Belgique" class="race-flag">BELGIQUE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Pays Bas.png" alt="Drapeau Pays Bas" class="race-flag">PAYS-BAS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Italie.png" alt="Drapeau Italie" class="race-flag">ITALIE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Azerbaïdjan.png" alt="Drapeau Azerbaïdjan" class="race-flag">AZRBAÏDJAN</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Singapour.png" alt="Drapeau Singapour" class="race-flag">SINGAPOUR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Etats Unis.png" alt="Drapeau Etats Unis" class="race-flag">ÉTATS-UNIS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Mexique.png" alt="Drapeau Mexique" class="race-flag">MEXIQUE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Brésil.png" alt="Drapeau Brésil" class="race-flag">BRÉSIL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Etats Unis.png" alt="Drapeau Etats Unis" class="race-flag">LAS VEGAS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Qatar.png" alt="Drapeau Qatar" class="race-flag">QATAR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr> 
                    <td><img src="images/flags/Drapeau Emirats Arabes Unis.png" alt="Drapeau Emirats Arabes Unis" class="race-flag">ABOU DABI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Contenu Static -->

    <script src="script.js"></script>
</body>
</html>