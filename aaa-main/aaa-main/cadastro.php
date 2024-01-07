<?php
$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
$connect = mysqli_connect('localhost', 'id21281893_abner', 'Aa@bner0610');
$db = mysqli_select_db($connect, 'id21281893_formulários');

// Verifica a conexão
if (!$connect) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($connect, $query_select);
$num_rows = mysqli_num_rows($select);

if ($login == "" || $login == null) {
    echo "<script>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
} else {
    if ($num_rows > 0) {
        echo "<script>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
    } else {
        $query = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";
        $insert = mysqli_query($connect, $query);

        if ($insert) {
            echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
    }
}

// Fecha a conexão
mysqli_close($connect);
?>
