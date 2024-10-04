<h1 class="championship-title">Championnat <?= ucwords($championship['name']); ?></h1>
<table class="uppercase-text">
    <thead>
        <tr>
            <th>position</th>
            <th>
            <?php if((isset($_GET['championship']) && $_GET['championship'] === "pilote")) {
                echo "pays";
            }?>
            </th>
            <th><?= $championship['name']; ?></th>
            <th>points</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            if((isset($_GET['championship']) && $_GET['championship'] === "pilote")) {
                for ($i=1; $i <= $championship['position']; $i++): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php endfor;
            }
            else if((isset($_GET['championship']) && $_GET['championship'] === "constructeur")) {
                for ($i=1; $i <= $championship['position']; $i++): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php endfor;
            } ?>
    </tbody>
</table> 