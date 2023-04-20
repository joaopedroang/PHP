<?php

$variavel = 10;
echo $variavel;

echo "<br><br>";

if ($variavel < 20) {
    echo "É menor que 20";
} else {
    echo "É maior que 20";
}

echo "<br><br>";

echo "Usando For<br>";
for ($i=0; $i<=10; $i++) {
    echo $i. " ";
}

echo "<br><br>";

echo "Usando While<br>";
$j = 0;
while ($j<=10) {
    echo $j. " ";
    $j++;
}

echo "<br><br>";

echo "Usando do... While<br>";
$k = 0;
do {
    echo "Olá ";
    $k++;
} while($k == 10);

echo "<br><br>";

echo "Usando Switch case<br>";
$switch = 1;
switch ($switch) {
    case 1: echo "Número 1";
        break;
    default: echo "Não é o valor informado";
        break;
}

echo "<br><br>";


?>