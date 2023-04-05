<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pneumoultramicroscopicossilicovulcanoconiotico</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1 id="titulo">vivendo e aprendendo</h1>
    <p id="paragrafo1">
    com grandes poderes vem gtrandes responsabilidades</p>
    
    <?php
    //abner jezrrel 
    echo 'desenvolvimento de sistemas'. '<br>'; ?> 

   <?php 

$servername= 'localhost'; 
$username= 'id20529078_contatos'; 
$password= 'Aa@06102005'; 
$nomedodb= 'id20529078_agenda';
 

$conn= new mysqli ( $servername , $username , $password,$nomedodb ); 

If ($conn->connect_error){	  

Die ('Conecção Falhou- tente novamente'. $conn->connect_error);} 

Echo  'conexão bem sucedida!'. '<br>';-+

$sql= "SELECT nome,sobrenome, celular FROM contatos";

$result= $conn -> query ($sql);

if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["celular"] . "<br>";
    }
} else {
    echo "informções não registradas";
}

$conn->close();
?>
<a href= "login.php"> ver contatos </a>

</body>
</html>
.