<?php
$peso = 63.0;
$altura = 1.73;
$imc = $peso/($altura*$altura);
if($imc<18.5){
    echo "Abaixo do Peso";}
elseif ($imc>=18.5 && $imc<=25){
    echo "Peso Ideal";}
elseif ($imc>=25 && $imc<=30){
    echo "Acima do Peso";}
else{
    echo "Obesidade";
}    
