<!DOCTYPE html>
<html>
<head>
    <title>Verificação A e B</title>
</head>
<body>
    <h1>Verificação A e B</h1>

    <form action="" method="POST">
        <label for="valorA">Valor A:</label>
        <input type="number" id="valorA" name="valorA" required>
        <br>
        <label for="valorB">Valor B:</label>
        <input type="number" id="valorB" name="valorB" required>
        <br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        if ($valorA > $valorB) {
            echo "<p>A maior que B</p>";
        } elseif ($valorA < $valorB) {
            echo "<p>A menor que B</p>";
        } else {
            echo "<p>A é igual a B</p>";
        }

        echo "<p>O número digitado foi: $valorA</p>"; 
    }
    ?>

</body>
</html>
