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
                <div class="tenisous">
                    <img src="img/edicaoesp/ous/ous1.jpg" alt="">
                    <p class="name">TÊNIS OUS IMIGRANTE PRETO AMARELO HOLOGRÁFICO ESSENCIAL</p>
                    <p class="price">R$369,90</p>
                </div>
                <div class="tenisous">
                    <img src="img/edicaoesp/ous/ous2.webp" alt="">
                    <p class="name">TÊNIS OUS IMIGRANTE 2 OE- Masculino</p>
                    <p class="price">R$369,90</p>
                </div>
                <div class="tenisous">
                    <img src="img/edicaoesp/ous/ous7.jpg" alt=""> <!--MUDAR-->
                    <p class="name">TÊNIS OUS IMIGRANTE PRETO FURTA COR</p>
                    <p class="price">R$399,99</p>
                </div>
                <div class="tenisous">
                    <img src="img/edicaoesp/ous/ous9.avif" alt="">
                    <p class="name">TÊNIS OUS IMIGRANTE CREME UV ESSENIAL</p>
                    <p class="price">R$429,90</p>
                </div>
                <div class="tenisous">
                    <img src="img/edicaoesp/ous/ous11.png" alt="">
                    <p class="name">TÊNIS BETS X ANGELI "BOB CUSP MATERIAL" IMPERIAL</p>
                    <p class="price">R$589,90</p>
                </div>
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
                <div class="camisabaw">
                    <img src="img/edicaoesp/baw/camiseta4.jpg" alt="">
                    <p class="name">CAMISETA SELFIE LOGO PRETA</p>
                    <p class="price">R$139,90</p>
                </div>
                <div class="camisabaw">
                    <img src="img/edicaoesp/baw/camiseta5.jpg" alt="">
                    <p class="name">CAMISETA MC REGULAR RIDING 4 FUN</p>
                    <p class="price">R$149,90</p>
                </div>
                <div class="camisabaw">
                    <img src="img/edicaoesp/baw/camiseta7.jpg" alt="">
                    <p class="name">CAMISETA MC REGULAR CHILL</p>
                    <p class="price">R$129,00</p>
                </div>
                <div class="camisabaw">
                    <img src="img/edicaoesp/baw/camiseta6.jpg" alt="">
                    <p class="name">CAMISETA MC REGULAR MELTING</p>
                    <p class="price">R$149,90</p>
                </div>
                <div class="camisabaw">
                    <img src="img/edicaoesp/baw/camiseta9.jpg" alt="">
                    <p class="name">CAMISETA MC SKATE PENCIL</p>
                    <p class="price">R$149,90</p>
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