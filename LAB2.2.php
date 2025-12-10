<?php
$amount = 500;
$vatRate = 0.15;
$vat = $amount * $vatRate;
$totalAmount = $amount + $vat;
echo "Amount: " . $amount . "<br>";
echo "Vat (15%) Of Total Amount: " . $vat . "<br>";
echo "Total Amount (including VAT): " . $totalAmount;
?>