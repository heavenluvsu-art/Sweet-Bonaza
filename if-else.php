<?php
$candy = "Kitkat";
$stocks = 2;
$max_display_blocks = 10;
?>

<!DOCTYPE html>

<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>If-else Candy</title>
</head>
<body>
    
<h1>Sweet Harmony Candy Store</h1>

<h2>Candy Stock Checker: <?= $candy ?></h2>
<p>
    **Current Stock:** <?php 
    for ($i = 1; $i <= $stocks && $i <= $max_display_blocks; $i++): 
    ?>
        <span style="font-size: 1.2em; color: #fcba63;">■</span>
    <?php endfor; ?>
    (<?= $stocks ?> items)
</p>

<?php
if ($stocks > 8):
?>
    <p class="offer">Status: **PLENTY AVAILABLE!** Stock is full. </p>
<?php elseif ($stocks >= 3): ?>
    <p>Status: **MODERATE STOCK.** Grab some now. </p>
<?php else: ?>
    <p class="offer">Status: **CRITICALLY LOW STOCK!** Only <?= $stocks ?> left! </p>
<?php endif; ?>

<?php include 'footer.php'; ?>
</body>
</html>
