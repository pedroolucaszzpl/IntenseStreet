<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/cadastro.js"></script>
    <link rel="stylesheet" href="css/cadastro.css">
    
    <title>Document</title>
</head>
<body>
    <img src="img/logo1.png" width="300">
    <form id="cadastroForm">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" required><br>

        <button type="submit" onclick="cadastrar()">Cadastrar</button>

    </form>
</body>
</html>