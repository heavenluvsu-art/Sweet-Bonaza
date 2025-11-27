<?php
$level = 2;

$reward = match($level) {
    1 => "Free MikMik ",
    2 => "Free Kitkat ",
    3 => "Free Toblerone ",
    default => "No rewards available "
};
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Match Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Loyalty Rewards</h2>
<p>Your Reward: <strong><?= $reward ?></strong></p>

<?php include 'footer.php'; ?>
</body>
</html>
