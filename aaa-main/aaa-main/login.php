<?php
$host = 'localhost';
$user = 'id21281893_abner';
$pass = 'Aa@bner0610';
$db_name = 'id21281893_usuarios';

$connection = new mysqli($host, $user, $pass, $db_name);

if ($connection->connect_error) {
    die("Conexão falhou: " . $connection->connect_error);
}

$login = $_POST['login'];
$senha = $_POST['senha'];

$login = mysqli_real_escape_string($connection, $login);

$query = "SELECT * FROM usuarios WHERE login = '$login'";
$result = $connection->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['login'] = $login;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Senha incorreta');window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado');window.location.href='login.html';</script>";
    }
} else {
    die("Erro na consulta: " . $connection->error);
}

$connection->close();
?>
