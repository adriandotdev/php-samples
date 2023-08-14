<?php

$posts = ['First post', 'second post', 'third post'];

foreach ($posts as $index => $post) {
    echo '<br>' . $index . '->' . $post . '</br>';
}

for ($i = 0; $i < count($posts); $i++) {
    echo '<br>' . $posts[$i] . '</br>';
}
for ($i = 0; $i <= 11; $i++) {

    if ($i % 2 === 0)
        echo '<br>' . $i . '</br>';
}

$employee = [
    "name" => "Adrian",
    "age" => 22,
    "location" => "Cabuyao, Laguna"
];

foreach ($employee as $key => $value) {
    echo '<br>' . $key . '->' . $value . '</br>';
}
