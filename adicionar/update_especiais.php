            <?php
            include("../conexao.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Verifique se os campos obrigatórios foram submetidos
                if (isset($_POST["img"], $_POST["marca"], $_POST["descricao"], $_POST["preco"], $_POST["url_imagem"])) {
                    $nome = $_POST["img"];
                    $marca = $_POST["marca"];
                    $descricao = $_POST["descricao"];
                    $preco = $_POST["preco"];
                    $url_imagem = $_POST["url_imagem"];
                    $categoria = $_POST["categoria"];

                    // Consulta SQL para inserir um novo celular na tabela
                    $sql = "INSERT INTO tenis (tenis_img , tenis_modelo , tenis_preco , tenis_desc , tenis_marca, tenis_cor , tenis_cat) VALUES ('$nome', '$marca', '$descricao', '$preco', '$url_imagem', '$catergoria')";

                    if ($mysqli->query($sql)) {
                        echo "Celular adicionado com sucesso.";
                    } else {
                        die("Erro na inserção: " . $mysqli->error);
                    }
                } else {
                    echo "Campos obrigatórios não preenchidos.";
                }
            }
            ?>