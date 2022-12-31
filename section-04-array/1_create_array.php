<?php
/**
 * 15. Cách tạo mảng và truy xuất đến các phần tử của mảng
 */
$message = 'Hello again';
$count = 3;
$price = 1.99;
$isAdmin = true;
$data = null;

$articles = ['First post', 'Another post', 'Read this!'];
// echo $aricles;
echo '<pre>';
var_dump($articles);
echo '</pre>';

echo '<pre>';
print_r($articles);
echo '</pre>';

echo $articles[0];
echo '<br/>';
echo $articles[2];
echo '<br/>';
echo $articles[3];

?>