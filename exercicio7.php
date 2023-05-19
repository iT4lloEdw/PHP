<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    
    $soma = $valor1 + $valor2;

    if ($soma % 2 != 0) {
        echo "A soma dos valores é ímpar.";
    } else {
        $resultado = $soma * $valor1;
        
        if ($resultado % 2 != 0) {
            echo "Agora o valor é ímpar.";
        } else {
            if ($resultado < 100) {
                echo "Valor: " . $resultado;
            } else {
                while ($resultado >= 10) {
                    $somaAlgarismos = 0;
                    $numString = (string)$resultado;
                    $length = strlen($numString);
                    
                    for ($i = 0; $i < $length; $i++) {
                        $somaAlgarismos += (int)$numString[$i];
                    }
                    
                    $resultado = $somaAlgarismos;
                }
                
                echo "Valor reduzido: " . $resultado;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário PHP</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>