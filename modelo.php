<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vestuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" /><!--Google Link Icon-->
    <title>Document</title>
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
                        <li><a href="index.php">Página Inicial</a></li>
                        <li><a href="vestuario.php">Calçados</a></li>
                        <li><a href="vestuario.php">Acessórios</a></li>
                        <li><a href="vestuario.php">Vestuário</a></li>
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
            <a class="navbar-logo" href="index.php">
                <img src="img/logo1.png" alt="Logo IntenseStreet" description="Logo IntenseStreet" id="logo1">
            </a>
        </nav>
    </header>
    <main>
        <div class="model">
            <div class="barra">
                <div id="linhas">
                    <div class="line"></div>
                    <p class="pag">Vestuário</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="clothes">
            <?php
                session_start();
                include 'conexao.php';
                // Faça a consulta SQL
                $sql = "SELECT * FROM vestuario WHERE vestuario_cat = 'normal'";
                $resultado = $mysqli->query($sql); // $mysqli é o objeto da conexão
                
                // Verifique se a consulta foi bem-sucedida
                if ($resultado) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<div class="shirt">';
                            echo "<img src='" . $row["vestuario_img"] . "'>";
                            echo "<p class='desc'>" . $row["vestuario_modelo"] . "</p>";
                            echo "<p class='price'>R$" . $row["vestuario_preco"] . "</p>";
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
        <div class="model">
            <div class="barra">
                <div id="linhas">
                    <div class="line"></div>
                    <p class="pag">Acessórios</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="clothes">
            <?php
                include 'conexao.php';
                // Faça a consulta SQL
                $sql = "SELECT * FROM acessorios WHERE acessorio_cat = 'normal'";
                $resultado = $mysqli->query($sql); // $mysqli é o objeto da conexão
                
                // Verifique se a consulta foi bem-sucedida
                if ($resultado) {
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<div class="sweater">';
                            echo "<img src='" . $row["acessorio_img"] . "'>";
                            echo "<p class='desc'>" . $row["acessorio_modelo"] . "</p>";
                            echo "<p class='price'>R$" . $row["acessorio_preco"] . "</p>";
                            echo "</div>";
                        }

                    } else {
                        echo "Nenhum resultado encontrado.";
                    }
                } else {
                    die("Erro na consulta: " . $mysqli->error);
                }
               
                ?>
                <div class="sweater">
                    <!--<img src="img/modelos/corrente.jpg" alt="">
                    <p class="desc">COLAR JORDAN</p>
                    <p class="desc">COR-PRATA/DOURADO</p>
                    <p class="price">R$109,90</p>-->
                </div>
                <div class="shirt">
                    <!-- <img src="img/modelos/chapéu.jpg" alt="">
                   <p class="desc">CHAPÉU BUCKET NIKE</p>
                    <p class="desc">COR-PRETO</p>
                    <p class="price">R$114,90</p>-->
                </div>
                <div class="sweater">
                    <!--<img src="img/modelos/bolsa.jpg" alt="">
                    <p class="desc">BOLSA TOMMY HILFIGER</p>
                    <p class="desc">COR-PRETO</p>
                    <p class="price">R$229,90</p>-->
                </div>
            </div>
        </div>
        <div class="model">
            <div class="barra">
                <div id="linhas">
                    <div class="line"></div>
                    <p class="pag">Calçados</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="clothes">
                <div class="shirt">
                    <img src="https://images.tcdn.com.br/img/img_prod/690339/tenis_ous_imigrante_pb_gold_essencial_black_10881_1_aa781a830ec58927c93a60b487aff286.jpg" alt="">
                    <p class="desc">OUS IMIGRANTE PB GOLD ESSENCIAL BLACK</p>
                    <p class="desc">COR-PRETO</p>
                    <p class="price">R$329,90</p>
                </div>
                <div class="sweater">
                    <img src="https://www.tradeinn.com/f/13855/138556053/nike-air-max-sc-leather-trainers.jpg" alt="">
                    <p class="desc">NIKE AIR MAX SC LEATHER TRAINERS WHITE</p>
                    <p class="desc">COR-BRANCO</p>
                    <p class="price">R$309,90</p>
                </div>
                <div class="shirt">
                    <img src="https://static.lojafeiraodoscalcados.com.br/public/feiraodoscalcados/imagens/produtos/tenis-adidas-vs-pace-2-0-branco-6488e78a8c9d6.jpg" alt="">
                    <p class="desc">ADIDAS VS PACE 2.0</p>
                    <p class="desc">COR-BRANCO</p>
                    <p class="price">R$339,40</p>
                </div>
                <div class="sweater">
                    <img src="https://static.netshoes.com.br/produtos/tenis-baw-break-anniversary-masculino/19/QNL-0256-319/QNL-0256-319_zoom1.jpg?ts=1692218107&ims=420x" alt="">
                    <p class="desc">BAW BREAK ANNIVERSARY MASCULINO</p>
                    <p class="desc">COR-BRANCO E BEGE</p>
                    <p class="price">R$369,90</p>
                </div>
            </div>
        </div>
        <a href='update1.php?vestuario_id=" . $row["vestuario_id"] . "'>Editar</a>
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
    <script src="js/main.js" defer></script>
</body>
</html>