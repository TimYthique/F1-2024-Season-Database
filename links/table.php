<table class="uppercase-text">
    <thead>
        <tr>
            <th>course</th>
            <th>position</th>
            <th>temps</th>
            <th>meilleur tour</th>
            <th>points</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($races as $race): ?>
            <tr>
                <td>
                    <img src="<?= $race['flag']; ?>" alt="" class="race-flag">
                    <?= $race['race_name']; ?>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>