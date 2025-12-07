<form method="post">
    <input type="checkbox" name="products[]" value="Laptop-50000"> Laptop (₹50,000)<br>
    <input type="checkbox" name="products[]" value="Mobile-20000"> Mobile (₹20,000)<br>
    <input type="checkbox" name="products[]" value="Tablet-15000"> Tablet (₹15,000)<br>
    <input type="checkbox" name="products[]" value="Headphones-2000"> Headphones (₹2,000)<br>
    <input type="submit" value="Add to Cart">
</form>

<?php
if (isset($_POST['products'])) {
    $total = 0;
    echo "Selected Products:<br>";
    foreach ($_POST['products'] as $item) {
        list($product, $price) = explode("-", $item);
        echo $product . " - ₹" . $price . "<br>";
        $total += $price;
    }
    echo "Total Price: ₹" . $total;
}
?>
