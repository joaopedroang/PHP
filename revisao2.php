<?php

echo "1) Código que recebe 2 valores inteiros, faça a soma deles 
e depois multiplique o resultado pela metade do primero valor. <br>";

$valor1=10;
$valor2=5;

    echo "Valor 1 = ", $valor1,", e valor 2 = ", $valor2;
    echo "<br>";

$resultado=($valor1+$valor2)*($valor1/2);

    echo "O resultado é: ", $resultado;

echo "<br><br>";

echo "2) Código que recebe um valor inteiro, calcule e mostre 15% desse valor. <br>";

$valor=100;

    echo "Valor = ",$valor;
    echo "<br>";

$resultado=$valor*0.15;

    echo "O resultado é: ", $resultado;

echo "<br><br>";

echo "3) Código que recebe o valor de um produto comprado por um cliente, faça a divisão desse valor em 12 vezes 
e adicione 1% do valor em cada parcela. Mostre o valor das parcelas e valor total que será pago.<br>";

$valor=1200;

    echo "O valor é: ", $valor;
    echo "<br>";

$div=$valor/12;
$porcentagem=$valor/100;
$parcela=$div+$porcentagem;
$total=$parcela*12;

    echo "O valor das parcelas é: ",$parcela;
    echo "<br>";
    echo "O valor total é: ",$total;

echo "<br><br>";

echo "4) Código que receba um valor inteiro, o trasnforme em anos,
 diga sua idade e informe se é ou não maior de idade.<br>";

$valor=20000;

    echo $valor;
    echo "<br>";

$idade=$valor/365;

    echo number_format($idade), " anos";
    echo "<br>";

if ($idade >= 18) {
    echo "É maior de idade!";
} else {
    echo "Não é maior de idade!";
}

echo "<br><br>";
?>