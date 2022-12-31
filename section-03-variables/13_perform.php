<?php
$count = 10;
$size = 2;

echo '<pre>';
var_dump($count + 5);
echo '</pre>';

echo '<pre>';
var_dump($count * $size);
echo '</pre>';

$price = 2.95;
$quantity = 5;

echo '<pre>';
var_dump($price * $quantity);
echo '</pre>';

$message = 'Hello';
$name = 'Hoàng';
echo $message . $name;
echo '<br/>';
echo $message . ' ' . $name;

$price = 150;
$quantity = 3;
$price *= $quantity;

echo '<pre>';
var_dump($price);
echo '</pre>';

$price = '150';
$quantity = 3;
$price *= $quantity;

echo '<pre>';
var_dump($price);
echo '</pre>';

$isEditor = true;
$isAdmin = false;

echo '<pre>';
print_r($isEditor); // 1
echo '</pre>';

echo '<pre>';
print_r(!$isAdmin);
echo '</pre>';

print_r($isAdmin || $isEditor);
?>