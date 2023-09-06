<?php

$conn = new mysqli("localhost", "root", "", "intensestreet");

if ($conn->connect_error) {
    die("erro na conexão: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (nome,email,senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt-> bind_param("sss", $nome, $email, $senha);
    $stmt->execute();

    header ('Location: logar.php ');
    exit();
    
}
$conn->close();
?>