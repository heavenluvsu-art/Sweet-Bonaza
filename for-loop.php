<?php
$customer_packs = 7; 
$pack_price = 7.00;
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>For loop Candy</title>
</head>
<body>

<h1>Sweet Harmony Candy Store</h1>

<h2>Your Order Summary, Ringing You Up Now! </h2>

<div style="border: 1px solid #fbccbf; padding: 15px; margin-top: 20px;">
    
    <?php
    for ($i = 1; $i <= $customer_packs; $i++):
        
        $total_cost = $i * $pack_price;
    
        $bonus_info = match (true) {
            $i === 1 => [
                'message' => 'That\'s the first pack, ringing up at the standard price.',
                'is_offer' => false
            ],
            $i >= 2 && $i <= 4 => [
                'message' => "Great! That's enough for our Small Treat Bonus! You get something extra, on us!", 
                'is_offer' => true
            ],
            $i >= 5 => [
                'message' => "Wow, you hit the **GOLD TIER BONUS!** That’s the best deal we have—super value!", 
                'is_offer' => true
            ],
            default => [
                'message' => 'Processing your item...', 
                'is_offer' => false
            ]
        };
        ?>

        <p>
            <?php if ($bonus_info['is_offer']): ?>
                <span class="offer">
                    **Pack #<?= $i ?>:** (Total so far: ₱<?= number_format($total_cost, 2) ?>). **[PROMOTION]** *<?= $bonus_info['message'] ?>*
                </span>
            <?php else: ?>
                <span>
                    **Pack #<?= $i ?>:** (Total so far: ₱<?= number_format($total_cost, 2) ?>). *<?= $bonus_info['message'] ?>*
                </span>
            <?php endif; ?>
        </p>
        
    <?php endfor;?>
    
</div>

<p style="margin-top: 15px; font-weight: bold;">
     That brings your grand total for all <?= $customer_packs ?> packs to **₱<?= number_format($customer_packs * $pack_price, 2) ?>**. Thank you for shopping with Sweet Harmony!
</p>

<?php include 'footer.php'; ?>
</body>
</html>
