<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>
   
    <form action="" method="POST">
     <input type="number" name="numero" placeholder="Qual o número" required>
     <button type="submit">Entrar</button>
    </form>

    <?php
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        
        echo "<h2>Tabuada de $numero:</h2>";

        echo "<table>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>"; 
        }
        echo "</table>";
    }
    ?>
</body>
</html>
