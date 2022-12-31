<?php
$articles = [
    'first'     => 'First post',
    'second'    => 'Another post',
    'third'     => 'Read this!'
];

foreach ($articles as $key => $article) {
    echo $key . '=> '. $article . '<br/>';
}
?>