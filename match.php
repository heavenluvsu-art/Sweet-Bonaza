<?php
$customer_level = 2; 
$max_level_display = 4;
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

<h2>Loyalty Rewards Summary (Your Level: <?= $customer_level ?>)</h2>
<ul>

<?php
for ($level_check = 1; $level_check <= $max_level_display; $level_check++):

    $reward = match($level_check) {
        1 => "Free MikMik",
        2 => "Free Kitkat",
        3 => "Free Toblerone",
        default => "No rewards available"
    };
?>
    
    <?php 
    if ($level_check === $customer_level): 
    ?>
        <li class="offer">
            **Level <?= $level_check ?>:** Your Current Reward! **<?= $reward ?>**
        </li>
    <?php else: ?>
        <li>
            Level <?= $level_check ?>: Reward is <?= $reward ?>
        </li>
    <?php endif; ?>

<?php endfor; ?>

</ul>

<p style="margin-top: 15px;">
    To check rewards for higher tiers, please visit the counter!
</p>

<?php include 'footer.php'; ?>
</body>
</html>
