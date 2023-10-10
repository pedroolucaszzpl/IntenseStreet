<?php
include 'conexao.php';

if (isset($_GET['acessorio_id'])) {
    $acessorio_id = $_GET['acessorio_id'];

    $sql = "SELECT * FROM acessorios WHERE acessorio_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt ->bind_param("i", $acessorio_id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
    } else {
        die ("Item não encontrado");
    }
} else {
    die ("Item não específicado");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/update.css">
    <title>Editar Acessórios</title>
</head>

<body>
<header>
        <nav class="navbar">
            <div class="contentHead">
                <div class="navbar-menu">
                    <ul class="navbar-items">
                        <li class="navbar-items-menu">
                            <a class="nav-link" href="main.php" onclick="">Páginal Inicial</a>
                        </li>
                        <li><select name="departamentos" id="departamentos" onchange="redirectToPage(this)">
                                <option value="" disabled selected hidden>Departamentos</option>
                                <option value="calcados">Calçados</option>
                                <option value="acessorios">Acessórios</option>
                                <option value="vestuario">Vestuário</option>
                                <option value="especial">Edições Especiais</option>

                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu_vertical">
                <span id="icon" class="material-symbols-outlined" onclick="clickMenu()">
                    menu
                </span>
                <menu id="mvertical">
                    <ul>
                        <li><a href="main.php">Página Inicial</a></li>
                        <li><a href="main.php">Calçados</a></li>
                        <li><a href="main.php">Acessórios</a></li>
                        <li><a href="main.php">Vestuário</a></li>
                        <li><a href="especiais.php">Edições Especiais</a></li>
                    </ul>
                </menu>
            </div>
            <div class="search">
                <form class="forms" action="pesquisa.php" method="post">
                    <img id="lupa" src="img/lupa.png" alt="lupa">
                    <input type="text" placeholder=" O que você precisa?" class="ask" name="termo">
                    <input type="submit" value="Pesquisar">
                </form>
            </div>
            <div class="buy">
                <img id="carrinho" src="img/carrinho.png" alt="">
            </div>
            <div class="logarConta">
                <a href="logar.php">Logar</a>
            </div>
            <a class="navbar-logo" href="index.php">
                <img src="img/logo1.png" alt="Logo IntenseStreet" description="Logo IntenseStreet" id="logo1">
            </a>
        </nav>
    </header>
    <main>
        <div class="container">
    <h2>Editar Acessórios</h2>
    <form action="modelo.php" class="formulario" method="post">

        <input type="hidden" name="acessorio_id" id="acessorio_id"
            value="<?php echo $row['acessorio_id']; ?>" required>

        <th><label for="acessorio_modelo">Modelo:</label>
            <input type="text" name="acessorio_modelo" id="acessorio_modelo"
                value="<?php echo $row['acessorio_modelo']; ?>" required>
        </th>
        </br>
        <th> <label for="acessorio_preco">Preço:</label>
            <input type="number" name="acessorio_preco" id="acessorio_preco"
                value="<?php echo $row['acessorio_preco']; ?>" required>
        </th>
        </br>
        <th> <label for="acessorio_des">Descrição:</label>
            <input type="text" name="acessorio_des" id="acessorio_des"
             value="<?php echo $row['acessorio_des']; ?>" required>
        </th>
        </br>
        <th> <label for="acessorio_marca">Marca:</label>
            <input type="text" name="acessorio_marca" id="acessorio_marca" 
            value="<?php echo $row['acessorio_marca']; ?>" required>
        </th>
        </br>
        <th> <label for="acessorio_cor">Cor:</label>
            <input type="text" name="acessorio_cor" id="acessorio_cor" 
            value="<?php echo $row['acessorio_cor']; ?>" required>
        </th>
        </br>
        <th> <label for="acessorio_tamanho">Tamanho:</label>
            <input type="text" name="acessorio_tamanho" id="acessorio_tamanho" 
            value="<?php echo $row['acessorio_tamanho']; ?>">
        </th>
        </br>
        <th> <label for="acessorio_cat">Categoria:</label>
            <input type="text" name="acessorio_cat" id="acessorio_cat" 
            value="<?php echo $row['acessorio_cat']; ?>" required>
        </th>
        </br>

            <button class="btn" type="submit">Atualizar</button>
    </form>
    </div>
</main>
</body>

</html>