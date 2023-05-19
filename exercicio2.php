<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    $soma = $valor1 + $valor2 + $valor3;

    $sequencia = array($valor1, $valor2, $valor3);
    rsort($sequencia);

    echo "Soma dos valores: " . $soma . "<br>";
    echo "Sequência em ordem decrescente: " . implode(", ", $sequencia);
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

        <label for="valor3">Valor 3:</label>
        <input type="number" id="valor3" name="valor3" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>