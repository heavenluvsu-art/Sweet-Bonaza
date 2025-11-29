<?php
$product_sales = [
    'Kitkat' => 5,
    'Ferrero' => 9,
    'Tobleron' => 3,
    'Mik Mik' => 7
];

$feature_item = 'Ferrero';
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>For each Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Best Sellers and Sales Tracking</h2>
<ul>

<?php
foreach($product_sales as $candy_name => $sales_count): 
?>
    
    <?php 
    if ($candy_name === $feature_item): 
    ?>
        <li class="offer">
            ** Special Feature: <?= $candy_name ?>** (<?= $sales_count ?> sold)
            <br>
            <span style="font-weight: normal; font-size: 0.9em;">Sales Trend: </span>
            
    <?php else: ?>
        <li>
            **<?= $candy_name ?>** (<?= $sales_count ?> sold)
            <br>
            <span style="font-weight: normal; font-size: 0.9em;">Sales Trend: </span>
    <?php endif; ?>
        
        <?php 
        for ($i = 1; $i <= $sales_count; $i++): 
        ?>
            <span style="color: #fcba63;">★</span>
        <?php endfor; ?>
        
        </li>

<?php endforeach; ?>

</ul>

<?php include 'footer.php'; ?>
</body>
</html>
