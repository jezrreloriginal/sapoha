<?php

$servername= 'localhost'; 
$password= 'Aa@06102005'; 
$username= 'id20529078_contatos'; 
$namedb='id20529078_agenda';
 

$conn= new mysqli ( $servername , $username , $password,$nomedodb ); 

If ($conn->connect_error){	  

Die ('Conecção Falhou'. $conn->connect_error);} 

Echo  'conectado ao DB!'. '<br>';

?> ..//ilkilkj