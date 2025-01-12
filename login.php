<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login2</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<main>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="cpf">Insira seu nome de usuário</label>
        <input type="text" name="cpf" id="cpf" value="">
        <label for="senha">Insira sua senha</label>
        <input type="password" name="senha" id="senha" value="">
        <input type="submit" value="Enviar" name="botão">s  
        </form>
        </main>
<?php
$cpf = null;
$senha = null;
$enviar = null;     
    $cpf = $_POST['cpf'] ?? 0;
    $senha = $_POST['senha'] ?? 0;
    $enviar = $_POST['botão'] ?? 0;
    $host = "localhost";
    $db   = "teste";
    $user = "root";
    $pass = "";
    $con = new mysqli($host, $user, $pass);
    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
    } 
    if($enviar=="Enviar" && isset($cpf) && isset($senha) && isset($enviar)){ 
    $con->select_db($db);
    $query = "SELECT * FROM Usuario WHERE cpf='$cpf' AND senha='$senha'";
    $result = $con->query($query);
    
    if ($result instanceof mysqli_result) {
       
        if ($result->num_rows > 0) {
         
            header('Location: home.php');
            exit();  
        } else {
            echo "<h1>Usuário não encontrado!</h1>";
        }
    } else {
        // Se a consulta falhar, exibe a mensagem de erro
        echo "Erro na consulta: " . $con->error;
    }
} else {
    echo "Preencha todos os campos corretamente!";
}
  ?>
    
    </main>
</body>
</html>