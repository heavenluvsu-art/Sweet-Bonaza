<?php
$candy = "Kitkat";
$stocks = 2;

?>
<!DOCTYPE html>

<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>If Else Candy</title>
</head>
<body>
    

<h1>Sweet Harmony Candy Store</h1>

<h2>Candy Stock Checker</h2>
<p>Candy: <?= $candy ?></p>

<?php
if ($stocks > 5) {
    echo "<p>Status: Plenty available! </p>";
} else {
    echo "<p>Status: Low stock! Hurry! </p>";
}
?>

<?php include 'footer.php'; ?>
</body>
</html>
