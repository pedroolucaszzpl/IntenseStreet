<?php
// Inclua o arquivo de conexão com o banco de dados (conexao.php)
include '../conexao.php';

// Verifique se o ID do item a ser excluído foi passado
if (isset($_POST['acessorio_id'])) {
    $item_id = $_POST['acessorio_id'];

    // Execute a lógica de exclusão no banco de dados (substitua "sua_tabela" pelo nome da tabela correta)
    $sql = "DELETE FROM acessorios WHERE acessorio_id = $item_id";

    if ($mysqli->query($sql)) {
        // Item excluído com sucesso
        echo "Item excluído com sucesso. <a href='modelo.php'>Voltar</a>";
    } else {
        // Erro ao excluir o item
        echo "Erro ao excluir o item: " . $mysqli->error;
    }
} else {
    // ID do item não foi fornecido
    echo "ID do item não fornecido.";
}
?>