<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];

    if ($valor >= 1 && $valor <= 26) {
        $letra = chr(64 + $valor);
        echo "Letra correspondente: " . $letra;
    } else {
        echo "Valor inválido. Por favor, digite um número entre 1 e 26.";
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
        <label for="valor">Digite um número entre 1 e 26:</label>
        <input type="number" id="valor" name="valor" min="1" max="26" required><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>