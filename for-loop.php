<?php
$cost = 7;
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>For Loop Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Price Table (1–5 packs)</h2>

<?php
for ($i = 1; $i <= 5; $i++) {
    $subtotal = $cost * $i;
    echo "<p>$i pack(s) = ₱$subtotal</p>";
}
?>

<?php include 'footer.php'; ?>
</body>
</html>
