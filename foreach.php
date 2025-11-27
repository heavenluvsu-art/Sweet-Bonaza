<?php
$best_sellers = ['Kitkat', 'Ferrero', 'Tobleron', 'Mik Mik'];
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Foreach Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Best Sellers</h2>
<ul>
<?php foreach($best_sellers as $candy): ?>
    <li><?= $candy ?></li>
<?php endforeach; ?>
</ul>

<?php include 'footer.php'; ?>
</body>
</html>
