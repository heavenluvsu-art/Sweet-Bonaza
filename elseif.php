<?php
$rating = 3;
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Elseif Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Candy Rating</h2>

<?php
if ($rating == 5) {
    echo "<p>5 Stars — Best Seller Candy!</p>";
} elseif ($rating == 4) {
    echo "<p>4 Stars — Highly Recommended!</p>";
} elseif ($rating == 3) {
    echo "<p>3 Stars — Good Candy!</p>";
} else {
    echo "<p>Not a favorite… </p>";
}
?>

<?php include 'footer.php'; ?>
</body>
</html>
