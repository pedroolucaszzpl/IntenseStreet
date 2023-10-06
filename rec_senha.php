<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/rec_senha.css">

    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="logo">
            <img id="id-img" src="img/logo1.png">
        </div>
        <div class="login">
            <div class="msg">
                <p> Insira o seu email e enviaremos um link para você voltar a acessar a sua conta.</p>
            </div>
            <form method="post" action="login.php">
                <div class="form">
                    <label for="nome_login" id="nome_label">E-mail</label> <br>
                    <input id="nome_login" name="nome_login" required="required" type="text"
                        placeholder="Digite o e-mail de cadastro" />

                </div>
                <div>
                    <input id="botao_login" type="submit" value="Logar">
                </div>

            </form>
        </div>
    </div>
    </div>
    <footer>

    </footer>
</body>

</html>