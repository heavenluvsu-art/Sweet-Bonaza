<?php
declare(strict_types=1);

$tax_rate_percent = 12; 
$candy_products = [
    'Kitkat' => [
        'price' => 100.00, 
        'stock' => 12
    ],
    'Tobleron' => [
        'price' => 135.50,
        'stock' => 25
    ],
    'Ferrero' => [
        'price' => 730.75,
        'stock' => 15
    ],
    'MikMik' => [
        'price' => 1.00,
        'stock' => 30
    ],


];
function get_reorder_message(int $current_stock): string {
    return ($current_stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate_percent = 0): float {
    $total_value = get_total_value($price, $quantity);
    $tax_multiplier = $tax_rate_percent / 100;
    
    return $total_value * $tax_multiplier;
}
?>

<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Stock Monitor</title>
    <style>
        body {
            background-color: #000000ff; 
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(241, 106, 106, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #471f1fff;
        }
        th {
            background-color: #df3535ff; 
            color: white;
        }
        tr:nth-child(even) {
            background-color: #572828ff;
        }
        .reorder-yes {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1> Sweet Harmony Candy Store - Inventory</h1>

<h2>Product Stock Levels (Tax Rate: <?php echo $tax_rate_percent; ?>%)</h2>

<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Stock Level</th>
            <th>Reorder? (if < 10)</th>
            <th>Total Stock Value (PHP)</th>
            <th>Tax Due Upon Sale (PHP)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($candy_products as $product_name => $data) {
            $price = $data['price'];
            $stock = $data['stock'];

            echo '<tr>';
            echo '<td>' . $product_name . '</td>';
            echo '<td>' . $stock . '</td>';

            $reorder_message = get_reorder_message($stock);
            $class = ($reorder_message === 'Yes') ? 'reorder-yes' : '';
            echo '<td class="' . $class . '">' . $reorder_message . '</td>';
            $total_value = get_total_value($price, $stock);
            echo '<td>₱' . number_format($total_value, 2) . '</td>';
            global $tax_rate_percent;
            $tax_due = get_tax_due($price, $stock, $tax_rate_percent);
            echo '<td>₱' . number_format($tax_due, 2) . '</td>';

            echo '</tr>';
        } 
        ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>
</body>
</html>