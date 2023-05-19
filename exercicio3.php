<?php
$valorCompra = 5000.00;
$numParcelas = 12;
$taxaJuros = 1.5 / 100; // Convertendo a taxa de juros para decimal

$valorParcela = $valorCompra / $numParcelas;
$valorTotalComJuros = $valorCompra * (1 + $taxaJuros);

echo "Valor pago em cada parcela: R$ " . number_format($valorParcela, 2, ",", ".") . "<br>";
echo "Valor total da compra com juros: R$ " . number_format($valorTotalComJuros, 2, ",", ".");
?>