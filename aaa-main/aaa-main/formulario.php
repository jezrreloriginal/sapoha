
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CADASTRO DE FUNCIONÁRIOS</title>
  
</head>
<body>
<div class="box">
<form action="consulta.php" method="POST">
        <fieldset>
            <legend> <b> Formulario de cadastro</b></legend>
            <br>
<div class="inputBox">
    <input type="text" name="nome" id="name" class="inputUser">
    <label for="nome" class="labelinput" aria-placeholder="Nome Completo"> Nome Completo</label>
</div>
<br><br>
<div class="inputBox">
    <input type="text" name="email" id="email" class="inputUser">
    <label for="email" class="labelinput">E-mail </label>
</div><br><br>

<div class="inputBox">
    <input type="celular" name="celular" id="celular" class="inputUser">
    <label for="celular"class="labelinput"> Celular</label>
</div><br><br>


<p>Sexo</p>  <p></p>
<form action="radio.php"method="$post"></form>
<input type="radio" name="genero" value="feminino" required>
<label for="feminino">Feminino</label><br><br>

<input type="radio" name="genero" value="Masculino" required>
<label for="Masculino">Masculino</label><br><br>

<input type="radio" name="genero" value="Outro" required>
<label for="Outro">Outro</label><br><br><br>

<label for="data-nascimento">Data de nascimento  </label>
<input type="date" name="data-nascimento" id="data-nascimento" required><br><br><br>
    


<div class="inputBox">
    <input type="text" name="cidade" id="cidade" class="inputUser">
    <label for="cidade"class="labelinput" required>Cidade </label>
</div><br><br>


<div class="inputBox">
    <input type="text" name="estado" id="estado" class="inputUser">
    <label for="estado"class="labelinput" required>Estado </label>
</div><br><br>
<div class="inputBox">
    <input type="text" name="endereco" id="endereco" class="inputUser">
    <label for="endereco"class="labelinput" required >Endereço </label>
</div><br><br>
<input type="submit" id="submit">
        </fieldset>
    </form>
</div>



</body>
</html>