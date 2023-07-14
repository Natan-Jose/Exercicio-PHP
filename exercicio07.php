<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1"><br>

        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2"><br>

        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacao = $_POST["operacao"];

        switch ($operacao) {
            case "soma":
                $resultado = $numero1 + $numero2;
                break;
            case "subtracao":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicacao":
                $resultado = $numero1 * $numero2;
                break;
            case "divisao":
                $resultado = $numero1 / $numero2;
                break;
            default:
                $resultado = "Operação inválida";
                break;
        }
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
