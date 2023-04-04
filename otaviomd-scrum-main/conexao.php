<?php

$servername= 'localhost'; 
$username= 'id20481078_pequeno_db'; 
$password= 'Wag1234566543§'; 
$nomedodb= 'id20481078_pequeno';
 

$conn= new mysqli ( $servername , $username , $password,$nomedodb ); 

If ($conn->connect_error){	  

Die ('Conecção Falhou'. $conn->connect_error);} 

Echo  'conectado ao DB!'. '<br>';

?>