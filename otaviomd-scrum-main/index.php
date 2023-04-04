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
    <h1 id="titulo">pneumoultramicroscopicossilicovulcanoconiótico</h1>
    <p id="paragrafo1">
    Com 46 letras, pneumoultramicroscopicossilicovulcanoconiótico descreve indivíduo que possui doença pulmonar causada pela inspiração de cinzas vulcânicas. </p>
    
    <?php
    //wagner willian santos, otávio marques domingos e gabriel herique sena silva
    echo 'maior palavra do dicionario'. '<br>'; ?> 

   <?php 

$servername= 'localhost'; 
$username= 'id20481078_pequeno_db'; 
$password= 'Wag1234566543§'; 
$nomedodb= 'id20481078_pequeno';
 

$conn= new mysqli ( $servername , $username , $password,$nomedodb ); 

If ($conn->connect_error){	  

Die ('Conecção Falhou'. $conn->connect_error);} 

Echo  'conectado ao DB!'. '<br>';

 // lembrar de baixar o código atualizado para fazer o uplowad no site

$sql= "SELECT nome,sobrenome, telefone FROM db";

$result= $conn -> query ($sql);

if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>
<a href= "login.php"> Consultar agenda </a>

</body>
</html>
