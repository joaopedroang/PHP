<?php
echo "Recebe um valor e soma todos os números anteriores.<br>";
$valor=5;
$soma=0;
for ($i=0; $i<=$valor; $i++) { 
    $soma+=$i;
}
echo $soma;

echo "<br><br>";

echo "Recebe um valor e digita 'FPB' em linhas e colunas em ordem crescente. <br>";
echo "Usando for: <br><br>";
$valor=8;
$fpb="FPB";
for ($i=1; $i<=$valor; $i++) { 
    echo $fpb."<br>";
    $fpb.= "FPB";
}

echo "<br><br>";

echo "Usando do... while: <br><br>";
$valor=8;
$fpb="FPB";
$i=0;
do{
    echo $fpb."<br>";
    $fpb.= "FPB";
    $i++;
} while($i<=$valor);

echo "<br><br>";

echo "Recebe 3 valores inteiros e os exibe em ordem crescente.<br>"
$v1=10;
$v2=3;
$v3=14;

if ($v1<$v2)
?>