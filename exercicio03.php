<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
</head>
<body>
    <h2>Ordenar Valores em Ordem Crescente</h2>
    <form method="POST" action="">
        <label for="valorA">Valor A:</label>
        <input type="number" id="valorA" name="valorA" required>
        <br>
        <label for="valorB">Valor B:</label>
        <input type="number" id="valorB" name="valorB" required>
        <br>
        <button type="submit">Ordenar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];
        
        if ($valorA < $valorB) {
            echo "<p>$valorA $valorB</p>";
        } else {
            echo "<p>$valorB $valorA</p>";
        }
    }
    ?>
</body>
</html>
