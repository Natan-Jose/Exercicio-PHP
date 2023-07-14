<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de Média</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtendo as notas do formulário
        $notas = array($_POST['nota1'], $_POST['nota2'], $_POST['nota3']);

        // Calculando a média
        $media = array_sum($notas) / count($notas);

        // Exibindo a média final
        echo "<p>A média final é: " . $media . "</p>";

        // Verificando se o aluno foi aprovado ou reprovado
        if ($media >= 6) {
            echo "<p>Resultado: Aprovado</p>";
        } else {
            echo "<p>Resultado: Reprovado</p>";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" required><br>

        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>
