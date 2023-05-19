<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $operador = $_POST["operador"];

    $resultado = 0;
    
    switch ($operador) {
        case '+':
            $resultado = $valor1 + $valor2;
            break;
        case '-':
            $resultado = $valor1 - $valor2;
            break;
        case '*':
            $resultado = $valor1 * $valor2;
            break;
        case '/':
            $resultado = $valor1 / $valor2;
            break;
        default:
            echo "Operador inválido. Por favor, digite um operador matemático (+, -, *, /).";
            exit;
    }
    
    echo "Resultado da operação: " . $resultado;
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

        <label for="operador">Operador (+, -, *, /):</label>
        <input type="text" id="operador" name="operador" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>