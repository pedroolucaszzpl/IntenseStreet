<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Google Link Icon-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/especiais.css">
    <title>IntenseStreet Páginas Especial</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="contentHead">
                <div class="navbar-menu">
                    <ul class="navbar-items">
                        <li class="navbar-items-menu">
                            <a class="nav-link" href="index.php" onclick="">Páginal Inicial</a>
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
                    <label for="termo" class="sr-only">O que você precisa?</label>
                    <input type="text" id="termo" placeholder=" O que você precisa?" class="ask" name="termo">
                    <label for="submit" class="sr-only">Pesquisar</label>
                    <button type="submit" id="submit" class="submit-btn">
                        <img id="lupa" src="img/lupa.png" alt="lupa">
                    </button>
                </form>
            </div>
            <div class="buy">
                <img id="carrinho" src="img/carrinho.png" alt="">
            </div>
            <a class="navbar-logo" href="index.php">
                <img src="img/logo1.png" alt="Logo IntenseStreet" description="Logo IntenseStreet" id="logo1">
            </a>
        </nav>
    </header>
    <main>
        <div class="espedition">
            <div class="barra">
                <div id="linhas">
                    <div class="line"></div>
                    <div class="pag">
                        <p>EDIÇÕES ESPECIAIS</p>
                    </div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="sePurple">
                <form method="post" class="adicionar" action="./adicionar/formadd_tenis.php">
                    <input type="submit" class="add" value="+"></input>
                </form>
            </div>
            <div class="calcous">
                <img src="img/edicaoesp/ous/ous.png" alt="">
                <p>Calçados</p>
                <div class="linep"></div>
            </div>
            <div class="ous">
                <?php
                session_start();
                include 'conexao.php';
                // Faça a consulta SQL
                $sql = "SELECT * FROM tenis WHERE tenis_cat = 'especial' LIMIT 5";
                $resultado = $mysqli->query($sql); // $mysqli é o objeto da conexão
                
                // Verifique se a consulta foi bem-sucedida
                if ($resultado) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<div class= 'all'>";
                            echo "<a href='mostruario.php?id=".$row['tenis_id']."'>";
                            echo "<div class= 'tenisous'>";
                            echo "<img src='" . $row["tenis_img"] . "'>";
                            echo "<p class='name'>" . $row["tenis_modelo"] . "</p>";
                            echo "<p class='price'>R$" . $row["tenis_preco"] . "</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "<div class='exclude'>";
                            echo "<form method='POST' action='excluir/excluir_calc.php'>";
                            echo "<input type='hidden' name='tenis_id' value='" . $row['tenis_id'] . "'>";
                            echo "<button class='excluir_btn' type='submit' data-item-id=" . $row['tenis_id'] . ">Excluir</button>";
                            echo "</form>";
                            echo "<form method='GET' action='editar_calc.php'>";
                            echo "<button class='editar_btn' href='excluir.php' data-item-id=" . $row['tenis_id'] . ">Editar</button>";
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";
                        }

                    } else {
                        echo "Nenhum resultado encontrado.";
                    }
                } else {
                    die("Erro na consulta: " . $mysqli->error);
                }

                ?>
            </div>
            <div class="secGreen">
                <form method="post" class="adicionar" action="./adicionar/formadd_camisa.php">
                    <input type="submit" class="add" value="+"></input>
                </form>
            </div>
            <div class="camibaw">
                <img src="img/edicaoesp/baw/baw.png" alt="">
                <p>Camisetas</p>
                <div class="linep"></div>
            </div>
            <div class="baw">
                <?php
                //session_start();
                include 'conexao.php';
                // Faça a consulta SQL
                $sql = "SELECT * FROM camisetas WHERE camiseta_cat = 'especial' LIMIT 5";
                $resultado = $mysqli->query($sql); // $mysqli é o objeto da conexão
                
                // Verifique se a consulta foi bem-sucedida
                if ($resultado) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<div class='all'>";
                            echo "<a href='mostruario.php?id=".$row['camiseta_id']."'>";
                            echo '<div class="camisabaw">';
                            echo "<img src='" . $row["camiseta_img"] . "'>";
                            echo "<p class='name'>" . $row["camiseta_modelo"] . "</p>";
                            echo "<p class='price'>R$" . $row["camiseta_preco"] . "</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "<div class='exclude'>";
                            echo "<form method='POST' action='excluir/excluir_camisa.php'>";
                            echo "<input type='hidden' name='tenis_id' value='" . $row['camiseta_id'] . "'>";
                            echo "<button class='excluir_btn' data-item-id=" . $row['camiseta_id'] . ">Excluir</button>";
                            echo "</form>";
                            echo "<button class='editar_btn' href='excluir.php' data-item-id=" . $row['camiseta_id'] . ">Editar</button>";
                            echo "</div>";
                            echo "</div>";
                        }

                    } else {
                        echo "Nenhum resultado encontrado.";
                    }
                } else {
                    die("Erro na consulta: " . $mysqli->error);
                }

                ?>
            </div>
        </div>
        </div>
    </main>

    <!-- Início do Rodapé -->
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Serviços</h3>
                        <ul>
                            <li><a href="#">Compras</a></li>
                            <li><a href="#">Entrega</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Sobre</h3>
                        <ul>
                            <li><a href="#">Companhia</a></li>
                            <li><a href="#">Quem Somos nós?</a></li>
                            <li><a href="#">Politica</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3></h3>
                        <ul>
                            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
</body>

</html>