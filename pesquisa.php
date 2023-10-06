<?php

include('conexao.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista</h1>
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo ($_GET['busca']) ?>" placeholder="Procure um celular aqui" type="text">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
        <?php
        if (!isset($_GET['busca'])) {
          ?>
        <?php
} else {
    $pesquisa = $mysqli->real_escape_string($_GET['busca']);
    $sql_code = "SELECT *
       FROM vestuario 
       WHERE vestuario_marca LIKE '%$pesquisa%' 
       OR vestuario_preco LIKE '%$pesquisa%' 
       OR vestuario_modelo LIKE '%$pesquisa%'";
    $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
    
    if($sql_query->num_rows == 0) {
    ?> 
        <table>
            <tr class="no-results">
                <td colspan="4">Nenhum resultado...</td>
            </tr>
        </table>
    <?php 
    } else { 
    ?>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Marca</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
            <?php 
            while($dados = $sql_query->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $dados['vestuario_img']; ?></td>
                    <td><?php echo $dados['vestuario_modelo']; ?></td>
                    <td><?php echo $dados['vestuario_marca']; ?></td>
                    <td><?php echo $dados['vestuario_preco']; ?></td>
                </tr>
            <?php
            } 
        }
    }    
    ?>
</table>

</body>
</html>