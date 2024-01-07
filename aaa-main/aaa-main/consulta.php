<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consulta de Funcionários</title>
</head>
<body>
    <div class="box">
        <h1>Informações do Formulário</h1>
        <?php
        // Verificar se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar os dados do formulário
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $celular = $_POST["celular"];
            $genero = $_POST["genero"];
            $dataNascimento = $_POST["data-nascimento"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $endereco = $_POST["endereco"];

            // Conectar ao banco de dados (substitua os valores conforme necessário)
            $servername = "localhost";
            $username = "id21281893_abner";
            $password = "Aa@bner0610";
            $dbname = "id21281893_forms";


            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar a conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Inserir os dados no banco de dados
            $sql = "INSERT INTO funcionarios (nome, email, celular, genero, data_nascimento, cidade, estado, endereco)
                    VALUES ('$nome', '$email', '$celular', '$genero', '$dataNascimento', '$cidade', '$estado', '$endereco')";

            if ($conn->query($sql) === TRUE) {
                echo "Dados inseridos com sucesso no banco de dados.";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }

            // Fechar a conexão
            $conn->close();
        } else {
            echo "<p>Nenhum dado enviado.</p>";
        }
        ?>
    </div>
</body>
</html>
