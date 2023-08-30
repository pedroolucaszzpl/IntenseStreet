<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>IntenseStreet HomePage</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="navbar-logo" href="index.html">
                <img src="img/logo1.png" alt="Logo IntenseStreet" description="Logo IntenseStreet" id="logo1">
            </a>
            <div class="contentHead">
                <div class="navbar-menu">
                    <ul class="navbar-items">
                        <li class="navbar-items-menu">
                            <a class="nav-link" href="main.html" onclick="">Páginal Inicial</a>
                            <select name="departamentos" id="departamentos">
                                <option value="" disabled selected hidden>Departamentos</option>
                                <option value="marcas">Marcas</option>
                                <option value="calcados">Calçados</option>
                                <option value="acessorios">Acessórios</option>
                                <option value="vestuario">Vestuário</option>
                                <option value="especiai">Edições Especiais</option>
                                
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search">
                <img id="lupa" src="img/lupa.png" alt="lupa">
                <input type="text" placeholder="   O que você precisa?" class="ask">
            </div>
            <div class="buy">
                <img id="carrinho" src="img/carrinho.png" alt="">
            </div>
        </nav>
    </header>
    <main>
        <div class="barra">
            <div id="linhas">
                <div class="line"></div>
                <p class="pag">IntenseStreet</p>
                <div class="line"></div>
            </div>
        </div>
        </div>
        <div class="slide first">
            <section class="galery">
                <div class="fotos">
                    <img src="img/homepage/1.png" alt="slide1">
                    <img src="img/homepage/2.png" alt="slide2">
                    <img src="img/homepage/4.png" alt="slide3">
                    <img src="img/homepage/3.png" alt="slide4">
                </div>
            </section>
        </div>
        <div class="slidesec">
            <section class="galery">
                <div class="fotos">
                    <img src="img/homepage/1-Copia.png" alt="slide1">
                    <img src="img/homepage/2-Copia.png" alt="slide2">
                    <img src="img/homepage/4-Copia.png" alt="slide3">
                    <img src="img/homepage/3-Copia.png" alt="slide4">
                </div>
            </section>
        </div>
        <div class="marcas">
            <div class="barra">
                <div id="linhas">
                    <div class="line"></div>
                    <p class="pag">Marcas</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="brandimg">
                <div class="b1"><div class="brand br1"><img src="img/homepage/adidas (1).png" alt=""></div> <p>Adidas</p></div>
                <div class="b1"><div class="brand br2"><img src="img/homepage/ous.png" alt=""></div> <p>OUS</p></div>
                <div class="b1"><div class="brand br3"><img src="img/homepage/baw.png" alt=""></div> <p>BAW</p></div>
                <div class="b1"><div class="brand br4"><img src="img/homepage/nike.png" alt=""></div> <p>Nike</p></div>

            </div>
        </div>

        <div>

        </div>
    </main>
    <!-- Início do Rodapé -->
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Company Name © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="js/homep.js"></script>
</body>
</html>