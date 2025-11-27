<?php
$category = "Chocolate";
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Switch Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Candy Category</h2>

<?php
switch ($category) {
    case "Kitkat":
        echo "<p>You chose: Kitkat </p>";
        break;
    case "Mik Mik":
        echo "<p>You chose: MikMik </p>";
        break;
    case "Tobleron":
        echo "<p>You chose: MikMik </p>";
        break;
    case "Ferrero":
        echo "<p>You chose: MikMik </p>";
        break;    
    default:
        echo "<p>Unknown category </p>";
}
?>

<?php include 'footer.php'; ?>
</body>
</html>
