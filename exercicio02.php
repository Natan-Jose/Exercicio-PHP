<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou ímpar</title>
</head>
<body>
    <h1>Verificação Par ou Ímpar</h1>

    <form action="" method="POST">
        <input type="number" name="numero" placeholder="Qual o número" required>
        <button type="submit" name="Enviar">Entrar</button>
    </form>
    
    <?php
    // Recebe o número digitado
    if (isset($_POST['Enviar'])) {
        print_r('numero: ' . $_POST['numero']);

        $numero = $_POST['numero'];
        
        // Verifica se o número é par ou ímpar
        if ($numero % 2 == 0) {
            echo "<p>O número digitado é par.</p>";
        } else {
            echo "<p>O número digitado é ímpar.</p>";
        }
    }
    ?>
</body>
</html>
