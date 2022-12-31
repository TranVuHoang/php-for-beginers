<?php
$articles = [
    1 => 'First post',
    3 => 'Another post',
    'Read this!'];
echo '<pre>';
print_r($articles);
echo '</pre>';

$articles = [
    'first'     => 'First post',
    'second'    => 'Another post',
    'third'     => 'Read this!'
];
echo '<pre>';
print_r($articles);
echo '</pre>';

echo $articles['second'];
?>