<?php
$category = "Chocolate";
$candies_in_category = [];
switch ($category) {
    case "Chocolate":
        $category_name = "Chocolate Bars & Truffles";
        $candies_in_category = ['Kitkat', 'Ferrero Rocher', 'Toblerone', 'Hershey\'s'];
        break;
    case "Powdered":
        $category_name = "Powdered & Gummy Treats";
        $candies_in_category = ['Mik Mik', 'Trolli', 'Hi-Chew'];
        break;
    default:
        $category_name = "Unknown Category";
        $candies_in_category = ['Please select a valid category.'];
}
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

<h2>Category Selected: **<?= $category_name ?>**</h2>
<p>
    <?php if ($category_name !== "Unknown Category"): ?>
        <span class="offer">Products in this Category:</span>
    <?php else: ?>
        <span><?= $candies_in_category[0] ?></span>
    <?php endif; ?>
</p>

<ul>
    <?php 
    for ($i = 0; $i < count($candies_in_category); $i++):
        $candy = $candies_in_category[$i];
    ?>
        
        <?php 
        if ($i === 0 && $category_name !== "Unknown Category"): 
        ?>
            <li class="offer">
                **Top Seller in <?= $category ?>:** <?= $candy ?>
            </li>
        <?php else: ?>
            <li>
                <?= $candy ?>
            </li>
        <?php endif; ?>

    <?php endfor; ?>
</ul>

<?php include 'footer.php'; ?>
</body>
</html>
