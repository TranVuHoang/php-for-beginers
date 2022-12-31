<?php
$values = [
    'message'   => 'Hello, world',
    'count'     => 150,
    'pi'        => 3.14,
    'status'    => false,
    'result'    => null
];

echo '<pre>';
var_dump($values);
echo '</pre>';

$count = 3;
$price = 9.99;
$values = [$count, $price];

echo '<pre>';
print_r($values);
echo '</pre>';

$articles = [
    'article1' => [
        'title'     => 'First post',
        'content'   => 'This is first post',
    ],
    'article2' => [
        'title'     => 'Another post',
        'content'   => 'Another post to read here',
    ],
    'article3' => [
        'title'     => 'Read this!',
        'content'   => 'You must read this article!',
    ]
];

echo '<pre>';
print_r($articles);
echo '</pre>';

echo $articles['article2']['title'];
?>