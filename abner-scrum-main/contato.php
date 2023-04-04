<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar informações </title>
</head>
<body>
    <h1>pesquisa de dados</h1>

    <!-- Formulário HTML -->
<form action="" method="post">
  <label>Nome: </label><br>
  <input type="text" name="nome"><br>
  <label>Sobrenome: </label><br>
  <input type="text" name="sobrenome"><br>
  <label>celular: </label><br>
  <input type="text" name="celular"><br>
  <input type="submit" value="Gravar">
</form>

<?php

    


//variaveis da conexão do banco dados

include "conexao.php";



// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $telefone = $_POST["celular"];

  // Insere os dados no banco de dados
  $sql = "INSERT INTO contatos (nome, sobrenome, celular) VALUES ('$nome', '$sobrenome', '$celular')";
  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
$conn->close();
?>
<p></p>

    <a href="index.php">Exibir Agenda</a>
    
</body>
</html>