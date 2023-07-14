<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>

    <?php
    $nome = $email = $mensagem = "";
    $sucesso = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = limparDados($_POST["nome"]);
        $email = limparDados($_POST["email"]);
        $mensagem = limparDados($_POST["mensagem"]);

        if (empty($nome) || empty($email) || empty($mensagem)) {
            echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color: red;'>Formato de email inválido.</p>";
        } else {
           
            $sucesso = "Obrigado! Sua mensagem foi enviada com sucesso.";
            $nome = $email = $mensagem = "";
        }
    }

    function limparDados($dados) {
        $dados = trim($dados);
        $dados = stripslashes($dados);
        $dados = htmlspecialchars($dados);
        return $dados;
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem"><?php echo $mensagem; ?></textarea><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if (!empty($sucesso)) {
        echo "<p style='color: green;'>$sucesso</p>";
    }
    ?>
</body>
</html>
