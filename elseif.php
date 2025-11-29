<?php
$rating = 3;
$max_rating = 5;
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Elif Candy</title>
    <style>

        .star {
            color: gold;
            font-size: 20px;
        }
    </style>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Candy Rating: **<?php echo $rating; ?>/5**</h2>

<?php
echo "<p>";
for ($i = 1; $i <= $max_rating; $i++) {
    if ($i <= $rating) {
        echo "<span class='star'>★</span>"; 
    } else {
        echo "<span class='star'>☆</span>"; 
    }
}
echo "</p>";

switch ($rating) {
    case 5:
        echo "<h3>Best Seller Candy!</h3>";
        break;
    case 4:
        echo "<h3>Highly Recommended!</h3>";
        break;
    case 3:
        echo "<h3>Good Candy!</h3>";
        break;
    case 2:
    case 1:
        echo "<h3>Fair Candy, Room for Improvement.</h3>";
        break;
    default:
        echo "<h3>Not a favorite...</h3>";
        break;
}
?>

<?php include 'footer.php'; ?>
</body>
</html>
