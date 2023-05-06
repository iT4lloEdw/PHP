<h3>O Cliente de uma loja realizou a compra de um produto 
e decidiu fazer o parcelamento em 12 parcelas iguais.
Para este parcelamento é cobrado juros de 1% ao mês.
Escreva um Código que calcule e exiba o valor total da compra e o valor das parcelas.</h3>

<h2>RESPOSTA:</h2>

<?php

$valor = 1200;
$juros = $valor*0.12;
$total = $valor + $juros;
$parcela = $total/12;
echo $total."<br>";
echo $parcela;


?>