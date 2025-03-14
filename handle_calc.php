<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Product Cost Calculator</title>
        <style type="text/css">
            .number { font-weight: bold; }
        </style>
    </head>
    <body>
        <?php // Script 4.2 - handle_calc.php
        /* This script takes values from calculator.html and performs 
        total cost and monthly payment calculations */

        // get the values from the $_POST array:
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];
        $shipping = $_POST['shipping'];
        $payments = $_POST['payments'];

        // calculate the total:
        $total = $price * $quantity;
        $total = $total + $shipping;
        $total = $total - $discount;

        // Determine tax rate:
        $taxrate = $tax / 100;
        $taxrate = $taxrate + 1;

        // factor in tax rate:
        $total = $total * $taxrate;

        // Calculate monthly payments:
        $monthly = $total / $payments;

        // print out results:
        print "<p>You have selected to purchase:<br>
        <span class=\"number\">$quantity</span> widgets at <br>
        $<span class=\"number\">$price</span> price each plus a <br>
        $<span class=\"number\">$shipping</span> shipping cost and a <br>
        $<span class=\"number\">$tax</span> percent tax rate.<br>
        After your $<span class=\"number\">$total</span>.<br>
        Divided over <span class=\"number\">$payments</span> monthly payments, that would be $<span class=\"number\">$monthly</span> each.</p>";

        ?>
        </body>
        </html>