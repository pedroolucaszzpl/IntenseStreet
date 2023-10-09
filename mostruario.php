<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mostruario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Google Link Icon-->
    <title>IntenseStreet Calçados</title>
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
                <img id="lupa" src="img/lupa.png" alt="lupa">
                <input type="text" placeholder="   O que você precisa?" class="ask">
            </div>
            <div class="buy">
                <img id="carrinho" src="img/carrinho.png" alt="">
            </div>
            <a class="navbar-logo" href="main.php">
                <img src="img/logo1.png" alt="Logo IntenseStreet" description="Logo IntenseStreet" id="logo1">
            </a>
        </nav>
    </header>
    <main>
        <div class="barra">
            <div id="linhas">
                <div class="line"></div>
                <p class="pag">DESCRIÇÃO</p>
                <div class="line"></div>
            </div>
        </div>
        <div class="desc_produto">
            <div class="principal">
                <img class="img2"
                    src="https://dillysports.vtexassets.com/arquivos/ids/171847-800-auto?v=637994471601300000&width=800&height=auto&aspect=true">
            </div>

            <?php
            session_start();
            include 'conexao.php';
            $tenis_id = GET['id'];
            $sql = "SELECT * FROM tenis WHERE tenis_id = '$tenis_id'";
            $resultado = $mysql->query($sql);

            if ($resultado) {
                if ($resultado->num_rows() > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<div class='principal'>";
                        echo "<img class='img2' src='" . $row["tenis_img"];
                        echo "</div>";
                        echo "<div class='descricao'>";
                        echo "<div class='nome'>";
                        echo "<h3>" . $row["tenis_modelo"] . "</h3>";
                        echo "</div>";
                        echo "<div class='cor'>";
                        echo "<label for='cor'>Cor:</label>";
                        echo "<p class='desc'>" . $row["tenis_cor"] . "</p>";
                        echo "</div>";
                        echo "<div class='tamanho'>";
                        echo "<label for='tamanho'>Tamanho:</label>";
                        echo "<p class='desc'>" . $row["tenis_tamanho"] . "</p>";
                        echo "</div>";
                        echo "</div>";

                    }
                }
            }
            ?>
            <div class="nome">
                <h3>Nome do produto</h3>
            </div>
            <div class="cor">
                <label for="cor">Cor:</label>
            </div>
            <div class="tam">
                <label for="tamanho">Tamanho:</label>
                <select id="tamanho">
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
            </div>
            <div class="valor">
                <h5>R$Valor do produto</h5>
            </div>
            <div class="pagamento">
                <label for="pagamento">Forma de Pagamento:</label>
                <select id="pagamento">
                    <option value="credito">Cartão de Crédito</option>
                    <option value="boleto">Boleto</option>
                    <option value="Pix">Pix</option>
                </select>
            </div>
            <div class="botoes-mostruario">
                <button id="botao-add">COMPRAR AGORA</button>
                <button id="botao-add">ADICIONAR AO CARRINHO</button>
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
    <script src="js/homep.js" async></script>
    <script src="js/main.js" defer></script>
</body>

</html>