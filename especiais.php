<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Google Link Icon-->
    <link rel="stylesheet" href="./css/especiais.css">
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
                <img id="lupa" src="img/lupa.png" alt="lupa">
                <input type="text" placeholder="   O que você precisa?" class="ask">
            </div>
            <div class="buy">
                <img id="carrinho" src="img/carrinho.png" alt="">
            </div>
            <div class="logarConta">
                <a href="index.php">Logar</a>
            </div>
            <a class="navbar-logo" href="main.php">
                <img src="img/logo1.png" alt="Logo IntenseStreet" description="Logo IntenseStreet" id="logo1">
            </a>
        </nav>
    </header>
    <main>
        <div class="espedition">
            <div class="barra">
                <div id="linhas">
                    <div class="line"></div>
                    <p class="pag">EDIÇÕES ESPECIAIS</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="sePurple"></div>
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
                $sql = "SELECT * FROM tenis WHERE tenis_cat = 'especial'";
                $resultado = $mysqli->query($sql); // $mysqli é o objeto da conexão
                
                // Verifique se a consulta foi bem-sucedida
                if ($resultado) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<div class="tenisous">';
                            echo "<img src='" . $row["tenis_img"] . "'>";
                            echo "<p class='name'>" . $row["tenis_modelo"] . "</p>";
                            echo "<p class='price'>R$" . $row["tenis_preco"] . "</p>";
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
            <div class="space">
                <div class="line"></div>
            </div>
            <div class="secGreen"></div>
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
                $sql = "SELECT * FROM camisetas WHERE camiseta_cat = 'especial'";
                $resultado = $mysqli->query($sql); // $mysqli é o objeto da conexão
                
                // Verifique se a consulta foi bem-sucedida
                if ($resultado) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<div class="camisabaw">';
                            echo "<img src='" . $row["camiseta_img"] . "'>";
                            echo "<p class='name'>" . $row["camiseta_modelo"] . "</p>";
                            echo "<p class='price'>R$" . $row["camiseta_preco"] . "</p>";
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