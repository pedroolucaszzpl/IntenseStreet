<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Abre o arquivo para escrita
    $file = fopen("usuarios.txt", "a");

    // Verifica se o arquivo foi aberto com sucesso
    if ($file) {
        // Escreve os dados do usuário no arquivo
        fwrite($file, "$nome|$email|$senha\n");

        // Fecha o arquivo
        fclose($file);

        echo "Cadastro realizado com sucesso!";
        header ('Location: index.php');
    } else {
        echo "Erro ao cadastrar o usuário.";
    }
}
?>