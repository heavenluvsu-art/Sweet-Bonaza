<?php
$greet = "Thank you for buying!";
$price = 15;
$name = 'Yuries';
$best_sellers = ['Kitkat', 'Ferrero', 'Tobleron', 'Mik Mik'];
$favorite = ['Kitkat', 'Ferrero', 'Tobleron', 'Mik Mik'];
$items = 4;
$cost = 7;

$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 12;
$total = $subtotal + $tax;
?>

<?php include 'header.php'; ?>

<h2>Welcome <?= $name ?>!</h2>

<h2>Best Sellers</h2>
<ul>
    <?php foreach($best_sellers as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>

<p>Your favorite candy is: <strong><?= $favorite[0] ?></strong></p>

<h2>Shopping Cart Summary</h2>
<p>Items: <?= $items ?></p>
<p>Cost per Pack: ₱<?= $cost ?></p>
<p>Subtotal: ₱<?= $subtotal ?></p>
<p>Tax (12%): ₱<?= $tax ?></p>
<p><strong>Total: ₱<?= $total ?></strong></p>

<p><?= $greet ?></p>

<?php include 'footer.php'; ?>
