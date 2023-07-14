<!DOCTYPE html>
<html>

<head>
    <title>Verificar Mês</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número entre 1 e 12:</label>
        <input type="number" id="numero" name="numero" min="1" max="12" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero >= 1 && $numero <= 12) {
            $meses = array(
                1 => "Janeiro",
                2 => "Fevereiro",
                3 => "Março",
                4 => "Abril",
                5 => "Maio",
                6 => "Junho",
                7 => "Julho",
                8 => "Agosto",
                9 => "Setembro",
                10 => "Outubro",
                11 => "Novembro",
                12 => "Dezembro"
            );

            echo "<p>O número $numero corresponde ao mês de " . $meses[$numero] . ".</p>";
        } else {
            echo "<p>Não existe mês com o número $numero.</p>";
        }
    }
    ?>
</body>

</html>