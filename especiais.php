<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/especiais.css">
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
                                <option value="calcados">Calçados</option>
                                <option value="acessorios">Acessórios</option>
                                <option value="vestuario">Vestuário</option>
                                <option value="especiai">Edições Especiais</option>
                                <option value="marcas">Marcas</option>
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
            </div class="contentBody">

    </header>
    <div class="barra">
        <div id="linhas">
            <div class="line"></div>
            <p class="pag">Edições Especiais</p>
            <div class="line"></div>
        </div>
    </div>
    <div class="calçados">
        <div id="linha">
            <p class="fonte">Calçados</p>
            <div class="lines"></div>
        </div>
    </div>
    <section>
        <div class="tenis">
            <img id="imgtst" src="img/edições especiais/tenis.png"> <img id="imgtst"
                src="img/edições especiais/sapato.webp"> <img id="imgtst" src="img/edições especiais/t2.jpg"> <img
                id="imgtst" src="img/edições especiais/t1.webp"> <img id="imgtst"
                src="img/edições especiais/1_4_83.jpg"> <img id="imgtst" src="img/edições especiais/1.webp"> <img
                id="imgtst" src="img/edições especiais/1f084b5958.webp"> <img id="imgtst"
                src="img/edições especiais/tenis-ous.avif"> <img id="imgtst"
                src="img/edições especiais/tenis_ous_phibo_webp.webp">
        </div>
    </section>
    <footer>

    </footer>
    <script src="js/homep.js" async></script>
</body>

</html>