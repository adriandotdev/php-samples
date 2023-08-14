<?php
function sayPhpHello()
{

    echo "Hello, Php";
}

$add = function ($n1, $n2) {
    return $n1 + $n2;
};

$subtract = fn ($n1, $n2) => $n1 - $n2;

echo $add(1, 3);
echo $subtract(5, 3);
sayPhpHello();
