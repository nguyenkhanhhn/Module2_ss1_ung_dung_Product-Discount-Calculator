<?php
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount_percent = $_POST['discount_percent'];
    $discount_amount = $price * $discount_percent * 0.1;
    echo "<lable>Product Description:$description</lable><br>";
    echo " <lable>List Price: $price</lable><br>";
    echo "  <lable> Discount Percent: $discount_percent</lable><br>  ";
    echo " <lable>    Discount Amount:$discount_amount </lable> ";
}
