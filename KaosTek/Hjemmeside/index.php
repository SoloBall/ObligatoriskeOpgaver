<?php
session_start();

include_once('Config/db_connect.php');

$sql = 'SELECT titel, pris FROM produkter ORDER BY pris ASC';
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<?php include_once('Templates/header.php'); ?>
<head><title>Welcome!</title></head>
<body class="grey lighten-4">
    <div class="container">
        <h4 class="center grey-text">Produkter:</h4>
        <div class="leaderboard">
            <table>
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Pris</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product): ?>
                        <tr>
                            <td><?= $product["titel"]?></td>
                            <td><?= $product["pris"]?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>