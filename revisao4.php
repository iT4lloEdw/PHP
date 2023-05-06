<h3>Escreva um Código que receba um valor inteiro, converta-o em anos, 
exiba a idade e informe se ele é maior ou menor de idade.</h3>

<h2>RESPOSTA:</h2>

<?php

$valor = 10000;
$idade = $valor/365;
echo number_format($idade);

if($idade >= 18){
    echo " maior de idade ";
} else {
    echo " menor de idade ";
    
}    

?>